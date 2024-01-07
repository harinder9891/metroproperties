
function getVals(){
    // Get slider values
    let parent = this.parentNode;
    let sliders = parent.getElementsByClassName("priceSlider");
    let minSliderValue = parseFloat(sliders[0].value);
    let maxSliderValue = parseFloat(sliders[1].value);

    // Format values in thousands or millions
    let formattedMinValue = formatCurrency(minSliderValue);
    let formattedMaxValue = formatCurrency(maxSliderValue);

    // Display formatted values
    let displayElement = parent.querySelector(".rangeValues");
    displayElement.innerHTML = "$" + formattedMinValue + " - $" + formattedMaxValue;

    // Update corresponding input values
    parent.querySelector(".minprice").value = "$" + formattedMinValue;
    parent.querySelector(".maxprice").value = "$" + formattedMaxValue;
}

function formatCurrency(value) {
    if (value >= 1000000) {
        return (value / 1000000).toFixed(1) + "M";
    } else if (value >= 1000) {
        return (value / 1000).toFixed(1) + "K";
    } else {
        return value.toFixed(0);
    }
}

window.onload = function () {
    // Initialize Sliders
    let sliders = document.getElementsByClassName('priceSlider');
    for (let i = 0; i < sliders.length; i++) {
        sliders[i].oninput = getVals;
    }

    getVals.call(sliders[0]); 
}


