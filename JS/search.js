function Search(item){
            var collection = document.getElementsByClassName("titel");
            for (i = 0;i < collection.length; i++){
                if (((collection[i].innerHTML).toLowerCase()).indexOf(item) > -1) {
                    collection[i].style.display = "block";
                    } else {
                        collection[i].style.display = "none";
                        }
            }
    }