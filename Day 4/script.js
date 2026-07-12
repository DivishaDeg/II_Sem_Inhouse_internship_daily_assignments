const quotes = [

{
quote: "The future belongs to those who believe in the beauty of their dreams.",
author: "Eleanor Roosevelt"
},

{
quote: "Success is not final, failure is not fatal: it is the courage to continue that counts.",
author: "Winston Churchill"
},

{
quote: "Believe you can and you're halfway there.",
author: "Theodore Roosevelt"
},

{
quote: "Dream big and dare to fail.",
author: "Norman Vaughan"
},

{
quote: "Do what you can, with what you have, where you are.",
author: "Theodore Roosevelt"
},

{
quote: "Stay hungry, stay foolish.",
author: "Steve Jobs"
},

{
quote: "Push yourself because no one else is going to do it for you.",
author: "Unknown"
},

{
quote: "Every day is a new beginning.",
author: "Unknown"
},

{
quote: "Your only limit is your mind.",
author: "Unknown"
},

{
quote: "Difficult roads often lead to beautiful destinations.",
author: "Unknown"
}

];

function generateQuote(){

const random = Math.floor(Math.random() * quotes.length);

document.getElementById("quote").innerHTML = `"${quotes[random].quote}"`;

document.getElementById("author").innerHTML = "- " + quotes[random].author;

}

generateQuote();