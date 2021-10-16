let dropdown = document.querySelector('select');

dropdown.addEventListener('change', function () {
    const color = this.value;
    switch (color) {
        case 'red':
            document.body.style.background = 'red';
            break;
        case 'green':
            document.body.style.background = 'green';
            break;
        case 'blue':
            document.body.style.background = 'blue';
            break;
        case 'black':
            document.body.style.background = 'black';
            document.body.style.color = 'white';
            break;

        default:
            document.body.style.background = 'white';
            document.body.style.color = 'black';
    } 
});

function cuaca(value){
    let weather = document.querySelector('#weather');

    if (value == 'Sunny'){
        weather.innerHTML = " It's nice and sunny outside today. wear shorts! Go to the beach, or the park, and get some ice cream";

    }else if (value == 'Rainy'){
        weather.innerHTML = " Rain is falling outside, take rain coat and a brolly, and don't stay out for too long"

    }
};


function factorial(){
x = document.getElementById("number").value
x = parseInt(x)

if(Number.isInteger(x)){
b = 1
for (i=1; i<=x; i++){
	  b = b*i
}
document.getElementById('hasil').innerHTML="Factorial of "+x+" is : "+b
}
};