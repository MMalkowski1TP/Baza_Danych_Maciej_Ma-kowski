var ref = { 
    0: 'B',
    1: 'A',
    2: 'G',
    3: 'F',
    4: 'E',
    5: 'D',
    6: 'C',
  };
function tableCreate() {
    const body = document.body,
    tbl = document.createElement('table');

  
    for (let i = 0; i < 7; i++) {
      const tr = tbl.insertRow();
      for (let j = 1; j < 13; j++) {
        if (i === 7 && j === 1) {
          break;
        } else {
            var btn = document.createElement('BUTTON');
            btn.id = (ref[i] + j);
            btn.style.backgroundColor = "black";
            const td = tr.insertCell();
            td.appendChild(btn); 
        }
      }
    }
    body.appendChild(tbl);
  }
  
  tableCreate();