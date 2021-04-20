const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');

let ticketPrice = +movieSelect.value;

//Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');
  const selectedSeatsCount = selectedSeats.length;
  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
}

//Movie Select Event
movieSelect.addEventListener('change', e => {
  ticketPrice = +e.target.value;
  updateSelectedCount();
});

var selectedDiv = "";
var x = document.querySelectorAll('.row .seat:not(.occupied)')
for (var i = 0; i < x.length; i++) {
    x[i].addEventListener("click", function(){
        
    var selectedEl = document.querySelector(".selected");
    if(selectedEl){
        selectedEl.classList.remove("selected");
    }
    this.classList.add("selected");
    updateSelectedCount(); 
    }, false);;
}
