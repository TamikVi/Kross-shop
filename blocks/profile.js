const input1 = document.getElementById('input1');
const input2 = document.getElementById('input2');

function uncheckOther(clicked, other) {
    if (clicked.checked) {
    other.checked = false;
    }
}

input1.addEventListener('change', () => {
    uncheckOther(input1, input2);
});

input2.addEventListener('change', () => {
    uncheckOther(input2, input1);
});