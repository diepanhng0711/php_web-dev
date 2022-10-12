var greeting = document.querySelector('#greeting')
var greeting2 = document.getElementById('greeting')
var greeting3 = document.getElementsByClassName('greeting3')
var h2 = document.createElement('h2')

h2.innerText = 'Welcome to the hell boys!'
h2.setAttribute('font-style', 'italic')
h2.className = 'greeting-1'
h2.style.color = 'aquamarine'

greeting.appendChild(h2)

console.log(typeof greeting)
console.log(typeof greeting2)
console.log(typeof greeting3)

console.log(greeting)
console.log(greeting2)
console.log(greeting3)