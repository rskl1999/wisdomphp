document.addEventListener("DOMContentLoaded", function () {
    // Get the elements for Time In and Time Out
    const timeInInput = document.getElementById('time-in');
    const timeOutInput = document.getElementById('time-out');

    // Function to calculate the rendered hours
    function calculateRenderedHours() {
        // Get the values of Time In and Time Out
        const timeIn = timeInInput.value;
        const timeOut = timeOutInput.value;

        // Split the time strings and parse hours and minutes
        const [inHours, inMinutes] = timeIn.split(':').map(Number);
        const [outHours, outMinutes] = timeOut.split(':').map(Number);

        // Calculate the rendered hours and minutes
        let renderedHours = outHours - inHours;
        let renderedMinutes = outMinutes - inMinutes;

        // Adjust if renderedMinutes is negative (when Time Out is before Time In)
        if (renderedMinutes < 0) {
            renderedHours -= 1;
            renderedMinutes += 60;
        }

        // Update the HTML elements with the calculated values
        document.getElementById('rendered-hours').innerText = renderedHours;
        document.getElementById('rendered-minutes').innerText = renderedMinutes;
    }

    // Add an event listener to the "Submit Hours" button to trigger the calculation
    document.getElementById('new-task').addEventListener('click', calculateRenderedHours);

    // Variable to store total rendered hours and minutes
    let totalRenderedHours = 0;
    let totalRenderedMinutes = 0;

    // Function to calculate rendered hours and minutes for the day
    function calculateRenderedTime(timeIn, timeOut) {
        const timeInHours = parseInt(timeIn.slice(0, 2));
        const timeInMinutes = parseInt(timeIn.slice(3, 5));
        const timeOutHours = parseInt(timeOut.slice(0, 2));
        const timeOutMinutes = parseInt(timeOut.slice(3, 5));

        let renderedHours = timeOutHours - timeInHours;
        let renderedMinutes = timeOutMinutes - timeInMinutes;

        if (renderedMinutes < 0) {
            renderedHours -= 1;
            renderedMinutes += 60;
        }

        return { hours: renderedHours, minutes: renderedMinutes };
    }

    // Function to update the Total Rendered section in the HTML
    function updateTotalRendered() {
        const totalRenderedHoursElement = document.getElementById("total-rendered-hours");
        const totalRenderedMinutesElement = document.getElementById("total-rendered-minutes");

        totalRenderedHoursElement.textContent = totalRenderedHours.toString().padStart(2, "0");
        totalRenderedMinutesElement.textContent = totalRenderedMinutes.toString().padStart(2, "0");
    }

    // Submit Hours button click event
    document.getElementById("new-task").addEventListener("click", function () {
        calculateRenderedHours(); // Call the function to calculate rendered hours
        const timeInValue = timeInInput.value;
        const timeOutValue = timeOutInput.value;

        // Calculate rendered hours for the day
        const renderedTime = calculateRenderedTime(timeInValue, timeOutValue);

        // Update total rendered hours and minutes
        totalRenderedHours += renderedTime.hours;
        totalRenderedMinutes += renderedTime.minutes;

        // Update Total Rendered section in the HTML
        updateTotalRendered();

        // Retrieve the stored total required value from local storage
        const storedTotalRequired = localStorage.getItem("totalRequiredHours");

        // If there is a stored value, update the total remaining with the new value
        if (storedTotalRequired !== null) {
            updateTotalRemaining(parseInt(storedTotalRequired));
        }
    });

    // Function to handle the input change event of the total required hours
    function handleTotalRequiredChange() {
        const totalRequiredInput = document.getElementById("total-required-hours");
        const totalRequired = parseInt(totalRequiredInput.value);

        // Store the total required value in local storage
        localStorage.setItem("totalRequiredHours", totalRequired);

        // Update the total remaining with the new value
        updateTotalRemaining(totalRequired);
    }

    function updateTotalRemaining(totalRequired) {
        const totalRenderedHours = parseInt(document.getElementById("total-rendered-hours").innerText);

        let totalRemainingHours = totalRequired - totalRenderedHours;
        
        if (totalRemainingHours < 0) {
            totalRemainingHours = 0;
        }

        document.getElementById("total-remaining-hours").innerText = totalRemainingHours.toString().padStart(2, "0");
    }


    // Function to initialize the total required hours input field
    function initTotalRequiredInput() {
        const totalRequiredInput = document.getElementById("total-required-hours");

        // Retrieve the stored total required value from local storage
        const storedTotalRequired = localStorage.getItem("totalRequiredHours");

        // If there is a stored value, update the total remaining with the new value
        if (storedTotalRequired !== null) {
            updateTotalRemaining(parseInt(storedTotalRequired));
        }

        // Update the total remaining with the default value
        updateTotalRemaining(parseInt(totalRequiredInput.value));

        // Add an event listener to handle changes in the total required input field
        totalRequiredInput.addEventListener("change", handleTotalRequiredChange);
        totalRequiredInput.addEventListener("input", handleTotalRequiredChange); // Also listen for input changes
    }

    // Call the initialization function when the page loads
    initTotalRequiredInput();
});