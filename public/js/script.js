
function getActualDate(){
    let actualDate = new Date();
    let day,mouth
    day = String(actualDate.getDate()).padStart(2, '0');
    mouth = String(actualDate.getMonth() + 1).padStart(2, '0');
    let year = actualDate.getFullYear();
    let date = day + '/' + mouth + '/' + year;


    document.getElementById('search').value=date;
};

window.onload = function(){
    getActualDate();
}