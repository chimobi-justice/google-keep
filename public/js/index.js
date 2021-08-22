const searchWrapper = document.getElementById('search-wrapper');

const search = document.getElementById('search');

const mainBody = document.getElementById('mainBody');

const asideBody = document.getElementById('asideBody');




const handleControlSearch = () => {
    if (search) {
        search.style.background = '#ffffff';
        searchWrapper.style.background = '#ffffff';
    }
};

search.addEventListener('click', handleControlSearch);

const enableControlSearch = () => {
    search.style.background = '#f1f3f4';
    searchWrapper.style.background = '#f1f3f4';
};

search.addEventListener('click', handleControlSearch);

const handleMainBody = () => (mainBody) ? enableControlSearch() : handleControlSearch();

mainBody.addEventListener('click',  handleMainBody);

const handleAsideBody = () => (asideBody) ? enableControlSearch() : handleControlSearch();

asideBody.addEventListener('click',  handleAsideBody);

