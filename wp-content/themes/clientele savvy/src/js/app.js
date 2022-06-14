import 'bootstrap'
import $, { event } from 'jquery'
import './nav'
import './animations'

let loc = location.href
let front_page = 'http://clientelesavvy.com/'
let contact = 'http://clientelesavvy.com/contact'

if (loc == front_page) {
  document.getElementById('btn').addEventListener('click', (event) => {
    var Fname = document.getElementById('first-name')
    var Lname = document.getElementById('last-name')
    var email = document.getElementById('email')
    var number = document.getElementById('number')
    if (
      isNotEmpty(Fname, event) &&
      isNotEmpty(Lname, event) &&
      isNotEmpty(email, event) &&
      isNotEmpty(number, event)
    ){
 
      if (loc == contact) {
        $.ajax({
          url: 'http://clientelesavvy.com/contact',
          method: 'POST',
          dataType: 'json',
          data: {
            Fname: Fname.val(),
            Lname: Lname.val(),
            email: email.val(),
            number: number.val(),
          },
          success: function (response) {
            console.log(response)
          },
        })
    } else {
      $.ajax({
        url: 'http://clientelesavvy.com/',
        method: 'POST',
        dataType: 'json',
        data: {
          Fname: Fname.val(),
          Lname: Lname.val(),
          email: email.val(),
          number: number.val(),
        },
        success: function (response) {
          console.log(response)
        },
      })
    }
  }
  })
}

function isNotEmpty(caller, event) {
  let value = caller.value
  if (value == '') {
    caller.style.border = '1px solid red'
    event.preventDefault()
    return false
  } else {
    caller.style.border = ''
    return true
  }
}





