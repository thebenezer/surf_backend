
function clearThree(obj){
    while(obj.children.length > 0){ 
      clearThree(obj.children[0])
      obj.remove(obj.children[0]);
    }
    if(obj.geometry) obj.geometry.dispose()
  
    if(obj.material){ 
      //in case of map, bumpMap, normalMap, envMap ...
      Object.keys(obj.material).forEach(prop => {
        if(!obj.material[prop])
          return         
        if(obj.material[prop] !== null && typeof obj.material[prop].dispose === 'function')                                  
          obj.material[prop].dispose()                                                        
      })
      obj.material.dispose()
    }
  }   
  
var handleSearch = function(event) {
    event.preventDefault();
    // Get the search terms from the input field
    var searchTerm = event.target.elements['search_query'].value;
    // Tokenize the search terms and remove empty spaces
    var tokens = searchTerm
                    .toLowerCase()
                    .split(' ')
                    .filter(function(token){
                    return token.trim() !== '';
                    });
    if(tokens.length) {
        console.log(tokens);
    // //  Create a regular expression of all the search terms
    // var searchTermRegex = new RegExp(tokens.join('|'), 'gim');
    // var filteredList = books.filter(function(book){
    //     // Create a string of all object values
    //     var bookString = '';
    //     for(var key in book) {
    //     if(book.hasOwnProperty(key) && book[key] !== '') {
    //         bookString += book[key].toString().toLowerCase().trim() + ' ';
    //     }
    //     }
    //     // Return book objects where a match with the search regex if found
    //     return bookString.match(searchTermRegex);
    // });
    // // Render the search results
    // render(filteredList);
    }
};

document.addEventListener('submit', handleSearch);
document.addEventListener('reset', function(event){
    event.preventDefault();
    document.querySelector('.search').value = '';
    // Places.length=0;
    // Places=allPlaces;
    clearThree(scene);

})