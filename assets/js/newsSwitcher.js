const btns = document.querySelectorAll(".prev-n");
let btn1 = 0;
let btn2 = 0;
let btn3 = 0;
let btn4 = 0;
let btnsArr = []

if (btns.item(0)) {
    btn1 = document.querySelector(".new-1");
    btnsArr.push(btns.item(0));
}
if (btns.item(1)) {
    btn2 = document.querySelector(".new-2");
    btnsArr.push(btns.item(1));
}
if (btns.item(2)) {
    btn3 = document.querySelector(".new-3");
    btnsArr.push(btns.item(2));
}
if (btns.item(3)) {
    btn4 = document.querySelector(".new-4");
    btnsArr.push(btns.item(3));
}

const options = {
    "capture": false,
    "once": false,
    "passive": false
};


if(btnsArr.length === 4){
    btn1.addEventListener('click', function (e) {
        btn1.classList.add('new-active');
        btn2.classList.remove('new-active');
        btn3.classList.remove('new-active');
        btn4.classList.remove('new-active');
        document.getElementById('n-3').setAttribute('style', 'display: none;');
        document.getElementById('n-1').setAttribute('style', 'display: flex;');
        document.getElementById('n-2').setAttribute('style', 'display: none;');
        document.getElementById('n-4').setAttribute('style', 'display: none;');
    }, options);

    btn2.addEventListener('click', function (e) {
        btn2.classList.add('new-active');
        btn1.classList.remove('new-active');
        btn3.classList.remove('new-active');
        btn4.classList.remove('new-active');
        document.getElementById('n-1').setAttribute('style', 'display: none;');
        document.getElementById('n-2').setAttribute('style', 'display: flex;');
        document.getElementById('n-3').setAttribute('style', 'display: none;');
        document.getElementById('n-4').setAttribute('style', 'display: none;');
    }, options);

    btn3.addEventListener('click', function (e) {
        btn3.classList.add('new-active');
        btn2.classList.remove('new-active');
        btn1.classList.remove('new-active');
        btn4.classList.remove('new-active');
        document.getElementById('n-1').setAttribute('style', 'display: none;');
        document.getElementById('n-3').setAttribute('style', 'display: flex;');
        document.getElementById('n-2').setAttribute('style', 'display: none;');
        document.getElementById('n-4').setAttribute('style', 'display: none;');
    }, options);

    btn4.addEventListener('click', function (e) {
        btn4.classList.add('new-active');
        btn2.classList.remove('new-active');
        btn3.classList.remove('new-active');
        btn1.classList.remove('new-active');
        document.getElementById('n-1').setAttribute('style', 'display: none;');
        document.getElementById('n-2').setAttribute('style', 'display: none;');
        document.getElementById('n-3').setAttribute('style', 'display: none;');
    }, options);

}else if(btnsArr.length === 3){

    btn1.addEventListener('click', function (e) {
        btn1.classList.add('new-active');
        btn2.classList.remove('new-active');
        btn3.classList.remove('new-active');
        document.getElementById('n-3').setAttribute('style', 'display: none;');
        document.getElementById('n-1').setAttribute('style', 'display: flex;');
        document.getElementById('n-2').setAttribute('style', 'display: none;');
    }, options);

    btn2.addEventListener('click', function (e) {
        btn2.classList.add('new-active');
        btn1.classList.remove('new-active');
        btn3.classList.remove('new-active');
        document.getElementById('n-1').setAttribute('style', 'display: none;');
        document.getElementById('n-2').setAttribute('style', 'display: flex;');
        document.getElementById('n-3').setAttribute('style', 'display: none;');
    }, options);

    btn3.addEventListener('click', function (e) {
        btn3.classList.add('new-active');
        btn2.classList.remove('new-active');
        btn1.classList.remove('new-active');
        document.getElementById('n-1').setAttribute('style', 'display: none;');
        document.getElementById('n-3').setAttribute('style', 'display: flex;');
        document.getElementById('n-2').setAttribute('style', 'display: none;');
    }, options);

}else if(btnsArr.length === 2){

    btn1.addEventListener('click', function (e) {
        btn1.classList.add('new-active');
        btn2.classList.remove('new-active');
        document.getElementById('n-1').setAttribute('style', 'display: flex;');
        document.getElementById('n-2').setAttribute('style', 'display: none;');
    }, options);

    btn2.addEventListener('click', function (e) {
        btn2.classList.add('new-active');
        btn1.classList.remove('new-active');
        document.getElementById('n-1').setAttribute('style', 'display: none;');
        document.getElementById('n-2').setAttribute('style', 'display: flex;');
    }, options);

}


