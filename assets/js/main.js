'use strict';

window.onload = function () {

    let companyName,
    numbers = 4;

    /**
     *
     * @returns {boolean}
     */
    inputCompanyNameForm.onsubmit = function () {

        companyName = firmTitleBlock.innerHTML = firmTitleBlock.innerHTML + this.inputCompanyName.value;

        let hiddenElements = document.getElementsByClassName('hiddenData');
        for (let i = 0; i < hiddenElements.length; i++) {
            hiddenElements[i].classList.add('displayedData');
        }

        inputCompanyNameDiv.remove();
        return false;
    };

    /**
     *
     */
    startCalculating.onclick = function () {


        let tableTrs = document.querySelectorAll('.inputDataTable tr');
        let modificationTableTrs = document.querySelectorAll('.modificationDataTable tr');
        let totalPreferenceScore = []; //Суммарная оценка предпочтения

        for (let i = 1; i < tableTrs.length; i++) {

            let inputs = tableTrs[i].querySelectorAll('input');
            let modificationTableInputs = modificationTableTrs[i].querySelectorAll('input');
            totalPreferenceScore[i] = [];

            for (let j = 0; j < inputs.length; j++) {
                modificationTableInputs[j].value = numbers - inputs[j].value;
                modificationTableInputs[j].setAttribute('value', numbers - inputs[j].value);
                totalPreferenceScore[i][j] = modificationTableInputs[j].value;
            }

        }

        let totalPreferenceScoreSum = fillTotalPreferenceScore(totalPreferenceScore);
        fillGoalsWeight(totalPreferenceScoreSum);
        saveCalculating();
    };

    /**
     *
     * @type {NodeList}
     */
    let inputDataTableTrs = document.querySelectorAll('.inputDataTable tr')[0].childNodes;
    let modificationDataTableTrs = document.querySelectorAll('.modificationDataTable tr')[0].childNodes;
    for (let i = 1; i < inputDataTableTrs.length; i++) {
        inputDataTableTrs[i].onclick = function () {
            let newTitle = prompt('Новое название', inputDataTableTrs[i].innerText);
            if (newTitle.length < 1) {
                alert('Название не может быть пустым');
            } else {
                this.innerText = newTitle;
                modificationDataTableTrs[i].innerText = newTitle;
            }
        }
    }

    /**
     *
     * @param arr
     * @returns {Array}
     */
    function fillTotalPreferenceScore(arr) {
        let sum = 0, totalSum = [];
        for (let j = 1; arr.length > j; j++) {
            sum = 0;
            for (let i = 1; arr[j].length >= i; i++) {
                sum = sum + parseInt(arr[i][j - 1]);
            }
            document.querySelectorAll('.totalPreferenceScoreTable td')[j - 1].innerText = sum;
            totalSum.push(sum);
        }
        return totalSum;
    }

    /**
     *
     * @param goalsWeight
     */
    function fillGoalsWeight(goalsWeight) {
        let goalsWeightTableTds = document.querySelectorAll('.goalsWeight table td');
        let arraySum = 0;
        let smallest = +Infinity;

        for (let i = 0; i < goalsWeight.length; i++) {
            arraySum = arraySum + goalsWeight[i];
        }

        for (let i = 0; i < goalsWeightTableTds.length; i++) {
            goalsWeightTableTds[i].innerText = (goalsWeight[i] / arraySum).toFixed(2);
            if (+goalsWeightTableTds[i].innerText < smallest) {

                for (let j = 0; j <= i; j++) {
                    goalsWeightTableTds[j].classList.remove('table-success');
                }

                goalsWeightTableTds[i].classList.add('table-success');
                // goalsWeightTableTds[i].classList.add('badge');
                // goalsWeightTableTds[i].classList.add('badge-success');
                smallest = +goalsWeightTableTds[i].innerText;
            }
        }
    }

    function saveCalculating() {
        let xhr = new XMLHttpRequest();

        let body = 'data=' + encodeURIComponent(
            document.getElementById('calculation').innerHTML
            ) +
            '&companyName=' + companyName
        ;

        xhr.open("POST", '/?ctrl=calculating&act=save', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.send(body);
    }
};