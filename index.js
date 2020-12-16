let selected = [];
var selectMode_status = Boolean(false);

const selectModeBtn = document.querySelector('#selectModeBtn');
const selectMode = () => {
  selectMode_status = !selectMode_status;
  if (selectMode_status === true) {
    selectModeBtn.classList.remove('btn-success');
    selectModeBtn.classList.add('btn-danger');
  } else {
    selectModeBtn.classList.add('btn-success');
    selectModeBtn.classList.remove('btn-danger');
    console.log('btn success');
    if (selected.length > 0) {
      selected = [];
    }
  }
};

const appendSelect = (value) => {
  if (selectMode_status === false) {
    return;
  } else {
    const bounceIndex = selected.indexOf(value);
    if (bounceIndex < 0) {
      selected.push(value);
      const rowSelect = document.querySelector('#content' + value);
      rowSelect.style.backgroundColor = 'gray';
    } else {
      selected.splice(bounceIndex, 1);
      const rowSelect = document.querySelector('#content' + value);
      rowSelect.style.backgroundColor = '#343A40';
    }

    console.log('Select List:', selected);
  }
};
