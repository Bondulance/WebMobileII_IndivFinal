// AJAX BEGINS
let request;

let commentForm = document.getElementById("commentForm");
console.log(commentForm);
let warning1 = document.getElementById("warning1");
let warning2 = document.getElementById("warning2");

commentForm.addEventListener("submit", function (event) {
  // prevent the default action of the form
  event.preventDefault();
  // validate the form
  validateForm();
});

function validateForm() {
  let valid = true;

  if (commentForm[0].value == "") {
    warning1.textContent = "Please enter your name.";
    warning1.style.display = "block";
    warning1.style.color = "red";
    valid = false;
  } else {
    warning1.style.display = "none";
  }

  if (commentForm[1].value == "") {
    warning2.textContent = "Please enter your message.";
    warning2.style.display = "block";
    warning2.style.color = "red";
    valid = false;
  } else {
    // if both fields are filled, hide the warnings and send the comment
    warning2.style.display = "none";
  }

  if (valid) {
    // if the form is valid, send the comment
    sendComment();
  }
}

function sendComment() {
  
  //variable name = the name input in the form
  const name = commentForm[0].value;
  //variable message = the message input in the form
  const message = commentForm[1].value;
  // Request Values


  // My ajax model
  const comment = {
    "name": name,
    "message": message,
  };

  request = new XMLHttpRequest();
  // uses the post method, send it back to the comments php file, and asynchronous is true
  request.open("POST", "assets/inc/submitComment.php", true);
  request.setRequestHeader("Content-Type", "application/json");
  // event handler, every time the request state changes, this function will be called
  request.onreadystatechange = function() {
    handleSubmit(request);
  }; 
  // sends the stringified comment object to the server
  request.send(JSON.stringify(comment));
}

function handleSubmit(request) {
  if (request.readyState == 4) {
    if (request.status >= 200 && request.status <= 299) {
    
      let payload = JSON.parse(request.responseText);

      if (payload.success) {
          retrieveData();
      }
    }
  }
}

/**
 * This functions main purpose is to retrieve the data from the database
 */
function retrieveData() {
  // creates the request object here

  const request = new XMLHttpRequest();

  request.open("POST", "../../comments.php", true);
  request.onreadystatechange = function () {
    handleResponse(request);
  };
  request.send();
}

function handleResponse(response) {
  if (request.readyState == 4) {
    if (request.status >= 200 && request.status <= 299) {
      let req = response.target.response;
      let payload = JSON.parse(req);

      const commentContainer = document.getElementById("commentsContainer");

  // quickly check if the container exists
  if (!commentContainer) {
    console.error("Comment container not found.");
    return;
  }

  // while loop, check if the array of children is greater than 0
  // if so, remove the first child
  while (commentContainer.children.length > 0) {
    commentContainer.removeChild(commentContainer.children[0]);
  }

  // lastly, we have to display all the comments
  // SO, do a for each comment in the database
    payload.forEach((comment) => {
    // It is time for DHTML
    const commentDiv = document.createElement("div");
    commentDiv.className = "comment";

    // h4 for name
    const name = document.createElement("h4");
    name.appendChild(document.createTextNode(comment.name));

    // p for message
    const message = document.createElement("p");
    message.appendChild(document.createTextNode(comment.message));
    // append the name and message to the comment div
    commentDiv.appendChild(name);
    commentDiv.appendChild(message);
    commentContainer.appendChild(commentDiv);

    commentForm[0].value = ""; // clear the name field
    commentForm[1].value = ""; // clear the message field
      }
    )}
  }

}