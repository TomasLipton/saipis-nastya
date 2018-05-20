'use strict';

window.onload = function () {

    inputCompanyNameForm.onsubmit = function () {

        firmTitleBlock.innerHTML = firmTitleBlock.innerHTML + this.inputCompanyName.value;

        inputDataTable.style.display = 'block';

        inputCompanyNameDiv.remove();
        return false;
    };

    startCalculating.onclick = function () {
        let numbers = 4;

        let tableTrs = document.querySelectorAll('.inputDataTable tr');
        let modificationTableTrs = document.querySelectorAll('.modificationDataTable tr');
        let totalPreferenceScore = []; //Суммарная оценка предпочтения
        for (let i = 1; i < tableTrs.length; i++) {

            let inputs = tableTrs[i].querySelectorAll('input');
            let modificationTableInputs = modificationTableTrs[i].querySelectorAll('input');
            totalPreferenceScore[i] = [];

            for (let j = 0; j < inputs.length; j++) {
                modificationTableInputs[j].value = numbers - inputs[j].value;

                totalPreferenceScore[i][j] = modificationTableInputs[j].value;
            }

        }

        fillTotalPreferenceScore(totalPreferenceScore);
    };

    let tableTrs = document.querySelectorAll('tr')[0].childNodes;
    for (let i = 1; i < tableTrs.length; i++) {
        tableTrs[i].onclick = function () {
            let newTitle = prompt('Новое название');
            if (newTitle.length < 1) {
                alert('Название не может быть пустым');
            } else {
                this.innerText = newTitle;
            }
        }
    }

    function fillTotalPreferenceScore(arr) {
        let sum = 0;
        for (let j = 1; arr.length > j; j++) {
            for (let i = 1; arr[j].length >= i; i++) {
                sum = sum + parseInt(arr[i][j - 1]);
            }
            document.querySelectorAll('.totalPreferenceScoreTable td')[j - 1].innerText = sum;
        }
    }
};