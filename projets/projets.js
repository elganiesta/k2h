

const title=document.getElementById('titre');
const description=document.getElementById('description');
const email=document.getElementById('email');

const form=document.getElementById('form');
var mydiv = document.getElementById('pubs');



class Post {
    constructor(title,description,email) {
        this.title = title ;
        this.description = description;
        this.email = email;
    }
}



// Store
class Store {
    static getPosts() {
      let posts;
      if(localStorage.getItem('Posts') === null) {
        posts = [];
      } else {
        posts = JSON.parse(localStorage.getItem('Posts'));
      }
  
      return posts;
    }

  
    static addPost(post) {
      const posts = Store.getPosts();
      posts.push(post);
      localStorage.setItem('Posts', JSON.stringify(posts));
    }

  }


  // Locale Storage
class My_Ls {
    static displayPosts() {
    
        const StoredPosts = Store.getPosts();

    StoredPosts.forEach( (post) => {
        My_Ls.addPostToList(post);
    });
}

    static addPostToList(post) {
        var mydiv = document.getElementById('pubs');

        var collection = document.createElement('ul');
        collection.className = 'post' ;
        collection.id = 'mylist';
        
        
        collection.innerHTML = `
        <li class="name" id="name">Dahi Hanane</li>
        <li id="title"><strong>${post.title}</strong></li>
        <li id="descriptionn">${post.description}</li>
        <li id="emaill">${post.email}</li>
        `;

        //append tr to mytable
        mydiv.appendChild(collection);

    }
}



//all event listeners 

 loadEventListeners();

 function loadEventListeners() {
     //load stored books
     document.addEventListener('DOMContentLoaded',My_Ls.displayPosts);
     //Add Task
     form.addEventListener('submit',addMyPost);
     
 }

 function addMyPost (e) {
    

    const obj = new Post(title.value,description.value,email.value);
    Store.addPost(obj);


    var collection = document.createElement('ul');
        collection.className = 'post' ;
        collection.id = 'mylist';
        
        
        collection.innerHTML = `
		<li class="name" id="name">Dahi Hanane</li>
        <li id="title"><strong>${post.title}</strong></li>
        <li id="descriptionn">${post.description}</li>
        <li id="emaill">${post.email}</li>
        `;

        mydiv.appendChild(collection);
    
    
    //form.reset();
    //refresh 
    //document.location.reload(true);

    e.preventDefault();
}



var card = document.getElementById('bigcard');
function card_height() {
	
    setTimeout(wait,2000);
    card.style.animation = 'k_height 2s ease';
    function wait() {
        card.style.height = '550px';
    }
}