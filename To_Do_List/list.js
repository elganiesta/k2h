//select elements

const code = document.getElementById('code');
const name = document.getElementById('name');
const adress = document.getElementById('adress');
const price = document.getElementById('price');
const phone = document.getElementById('phone');
const note = document.getElementById('note');

const formTask = document.getElementById('form-task');
var myTable = document.getElementById('my_table');

const clear = document.getElementById('clear');



//create order

class My_Order {
    
    constructor(code,name,adress,price,phone,note) {
        this.code = code ;
        this.name = name;
        this.adress = adress;
        this.price = price ;
        this.phone = phone;
        this.note = note ;
        this.checked = 0 ;
    }
}


// Store
class Store {
    static getOrders() {
      let Orders;
      if(localStorage.getItem('Orders') === null) {
        Orders = [];
      } else {
        Orders = JSON.parse(localStorage.getItem('Orders'));
      }
  
      return Orders;
    }

    static unique(code) {
        var p=0;
        const Orders = Store.getOrders();
        Orders.forEach((order) => {
            if(order.code === code) {
                p=1  ;
            }
        });
        return p;
    }
  
    static addOrder(order) {
      const Orders = Store.getOrders();
      Orders.push(order);
      localStorage.setItem('Orders', JSON.stringify(Orders));
    }

    static checkOrder(code) {
        const Orders = Store.getOrders();
        Orders.forEach((order) => {
            if(order.code === code) {
                order.checked = 1;
            }
        });

        localStorage.setItem('Orders', JSON.stringify(Orders));
    }
  
    static removeOrder(code) {
      const Orders = Store.getOrders();
  
      Orders.forEach((order, index) => {
        if(order.code === code) {
          Orders.splice(index, 1);
        }
      });
  
      localStorage.setItem('Orders', JSON.stringify(Orders));
    }
  }

//*************************************************************************** *//

// Locale Storage
class My_Ls {
    

    static displayOrders() {
        const StoredOrders = Store.getOrders();

    StoredOrders.forEach( (order) => {
        My_Ls.addOrderToList(order);
    });
}

    static addOrderToList(order) {
        var myTable = document.getElementById('my_table');

        //create tr
        var ligne = document.createElement('tr');
        ligne.className = 'tab_style' ;
        
        ligne.innerHTML = `
            <td>${order.code}</td>
            <td>${order.name}</td>
            <td class="adress">${order.adress}</td>
            <td>${order.price}</td>
            <td>${order.phone}</td>
            <td class="note">${order.note}</td>
            <td><img class="max-img" id="check_btn" src="./imgs/check.png"></td>
            <td><img class="max-img" id="delete_btn" src="./imgs/corbeille.png"></td>
        `;

        if(order.checked === 1) {
            ligne.style.backgroundColor = '#9CFFB4' ;
        }

        //append tr to mytable
        myTable.appendChild(ligne);

    
        
    }
}



//all event listeners 

 loadEventListeners();

 function loadEventListeners() {
     //load stored books
     document.addEventListener('DOMContentLoaded',My_Ls.displayOrders);
     //Add Task
     formTask.addEventListener('submit',addTask);
     //Delete 
     myTable.addEventListener('click',deleteTask);
    //clear tasks
     clear.addEventListener('click',cleartasks);
     //check tasks
     myTable.addEventListener('click',check);
 }

 function addTask (e) {
    
    const p = Store.unique(code.value);

    if(code.value == '') {
        alert("code can't be void");
    } else if(p===1) {
        alert("code must be unique");
    }
     else {
    const obj = new My_Order(code.value,name.value,adress.value,price.value,phone.value,note.value);
    Store.addOrder(obj);


    var tab = [code,name,adress,price,phone,note] ;
    
    //create tr
    var ligne = document.createElement('tr');
    ligne.className = 'tab_style' ;

    

    for(var i=0;i<tab.length;i++) {
        
        //create td 
        var colonne = document.createElement('td');
        var textnode = document.createTextNode(tab[i].value);
        colonne.appendChild(textnode);
        ligne.appendChild(colonne);
    
    }

    //add images
    var images = ["./imgs/check.png","./imgs/corbeille.png"]
    var ids = ["check_btn","delete_btn"]
    for(var i=0;i<images.length;i++) {
        var colonne = document.createElement('td');
        var image = document.createElement('img');
        image.className = 'max-img';
        image.id = ids[i];
        image.src = images[i];
        colonne.appendChild(image);
        ligne.appendChild(colonne);
    }
    //append tr to mytable
    myTable.appendChild(ligne);


    formTask.reset();
    //refresh
    document.location.reload(true);

    e.preventDefault();
}}

function deleteTask(e) {
    if(e.target.id == 'delete_btn') {
        
        var code = e.target.parentElement.parentElement.childNodes[1].textContent;
        
       Store.removeOrder(code);

       e.target.parentElement.parentElement.remove();
        
    }
}

function cleartasks() {
    while(myTable.lastChild.className == 'tab_style') {
        myTable.removeChild(myTable.lastChild)
    }   
    
}

function check(e) {
    if(e.target.id == 'check_btn') {
        e.target.parentElement.parentElement.style.backgroundColor = '#9CFFB4' ;
        var code = e.target.parentElement.parentElement.childNodes[1].textContent;
        Store.checkOrder(code);

        code = "khalid";
    }
    
}

