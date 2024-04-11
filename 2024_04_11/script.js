function addRow(name, surname, description) {
    const row = document.createElement('tr')

    const nameCell = document.createElement('td')
    nameCell.innerText = name
    row.appendChild(nameCell)

    const surnameCell = document.createElement('td')
    surnameCell.innerText = surname
    row.appendChild(surnameCell)

    const descriptionCell = document.createElement('td')
    descriptionCell.innerText = description
    row.appendChild(descriptionCell)

    const table = document.querySelector('#users-holder')
    table.appendChild(row)
}

function addUser(e) {
    e.preventDefault()

    const name = document.querySelector('#name').value

    const surname = document.querySelector('#surname').value

    const description = document.querySelector('#description').value

    if (!name || !surname || !description) {
        alert('Please fill all fields')
    } else {
        addRow(name, surname, description)
        const form = e.target
        form.reset()
    }
}

(() => {
    const form = document.querySelector('#users-form')

    form.addEventListener('submit', addUser)
})()