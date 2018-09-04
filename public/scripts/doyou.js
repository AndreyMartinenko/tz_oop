function doyou(e) {
    if(!e) e = window.event;
    e.cancelBubble = true;
    e.returnValue = 'Вы действительно хотите уйти со страницы?';
    if (e.stopPropagation) {
        e.stopPropagation();
        e.preventDefault();
    }
}
window.onbeforeunload=doyou;
