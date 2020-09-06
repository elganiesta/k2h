
var card1 = document.getElementById('cardprev');
var card2 = document.getElementById('cardnext');

function swept() {
    setTimeout(sweep,500);

    card1.style.animation = 'hide 500ms ease';

    function sweep() {
        card1.style.display = 'none';
        card2.style.display = 'block';
        card2.style.animation = 'left 1000ms ease'
    }
}


