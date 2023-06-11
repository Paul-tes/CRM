import MenueToggle from './modules/MenueToggle.js';

MenueToggle();

const result = [
  {
    name: 'paul',
    city: 'Addis Ababa',
    country: 'Ethiopia',
  },
  {
    name: 'Natnael',
    city: 'Addis Ababa',
    country: 'Ethiopia',
  },
  {
    name: 'Nahom',
    city: 'Addis Ababa',
    country: 'Ethiopia',
  },
  {
    name: 'Joseph',
    city: 'Addis Ababa',
    country: 'Ethiopia',
  },
];

document.querySelector('.cust-look-btn').addEventListener('click', () => {
  const resultContainer = document.querySelector('.result-lists');
  result.forEach((cust) => {
    const resultItem = document.createElement('div');
    resultItem.innerHTML = `
      <div class="result-item">
        <p>${cust.name}</p>
        <p>${cust.city}</p>
        <p>${cust.country}</p>
      </div>
    `;
    resultContainer.appendChild(resultItem);
  });
});