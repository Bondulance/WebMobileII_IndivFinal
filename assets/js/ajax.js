// AJAX BEGINS

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
  const request = new XMLHttpRequest();
  //variable name = the name input in the form
  const name = commentForm[0].value;
  //variable message = the message input in the form
  const message = commentForm[1].value;
  // Request Values

  // My ajax model
  const comment = {
    name: name,
    message: message,
  };

  // uses the post method, send it back to the comments php file, and asynchronous is true
  request.open("POST", "../../comments.php", true);
  // event handler, every time the request state changes, this function will be called
  request.onreadystatechange = function () {
    // this will ensure that the request is completely valid and complete
    if (request.readyState == 4 && request.status <= 299) {
      const requestResponse = request.responseText;
      console.log(requestResponse);
      let parseRequest = JSON.parse(requestResponse);
      console.log(parseRequest);

      if (parseRequest.success) {
        // call retrieveData function
        retrieveData();
      }
    }
  };
  // sends the stringified comment object to the server
  request.send(JSON.stringify(comment));
}

/**
 * This functions main purpose is to retrieve the data from the database
 */
function retrieveData() {
  // creates the request object here

  const request = new XMLHttpRequest();
  request.open("POST", "../../comments.php", true);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status <= 299) {
      showResponse(request.responseText);
    }
  };
  request.send();
}

/***
 * This function is used to show the response from the server
 * on the page
 *
 * @param response - the AJAX response from the server
 */

function showResponse(responseText) {
  let payload = JSON.parse(responseText);

  console.log(responseText);
  console.log(payload);

  // time to clear the container if it is not empty
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

    // p for message
    const message = document.createElement("p");
    // append the name and message to the comment div
    commentDiv.appendChild(name);
    commentDiv.appendChild(message);
    commentContainer.appendChild(commentDiv);
  });
}
