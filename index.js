var seleted = [];

const appendSelect = (value) => {
  const bounceIndex = seleted.indexOf(value);
  if (bounceIndex < 0) {
    seleted.push(value);
    const rowSelect = document.querySelector('#content' + value);
    rowSelect.style.backgroundColor = 'gray';
  } else {
    seleted.splice(bounceIndex, 1);
    const rowSelect = document.querySelector('#content' + value);
    rowSelect.style.backgroundColor = '#343A40';
  }

  console.log('Select List:', seleted);
};
