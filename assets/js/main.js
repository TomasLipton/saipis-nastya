'use strict';

window.onload = function () {

    inputCompanyNameForm.onsubmit = function () {

        firmTitleBlock.innerHTML = firmTitleBlock.innerHTML + this.inputCompanyName.value;
        // firmTitleBlock.style.display = 'inline';

        inputDataTable.style.display = 'block';

        inputCompanyNameDiv.remove();
        // h1.remove();
        return false;
    };
};