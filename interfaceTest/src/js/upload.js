
// https://www.youtube.com/watch?v=In0nB0ABaUk&t=7s&ab_channel=WebDevSimplified
const url = 'process.php'
const form = document.querySelector('form')
//  let message = document.getElementById('message').value("text");

form.addEventListener('submit',(e) => {
  e.preventDefault()

  //  console.log (message)
  const files = document.querySelector('[type=file]').files
  const formData = new FormData()

  for (let i = 0; i < files.length; i++) {
    let file = files[i]
    formData.append('files[]', file)
  }

  

  fetch(url, {
    method: 'POST',
    body: formData,
  })
  .then((response) => {
    console.log(response)
  })
})
