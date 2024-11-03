// SideBar
const toggleButton = document.getElementById('toggle-btn');
const sidebar = document.getElementById('sidebar');

// Opening and Closing Sidebar 
function toggleSidebar()
{
    sidebar.classList.toggle('close');
    toggleButton.classList.toggle('rotate');

    closeAllSubMenus();
}

// Sub menu
function toggleSubMenu(button)
{
    if (!button.nextElementSibling.classList.contains('show'))
    {
        closeAllSubMenus();
    }

    button.nextElementSibling.classList.toggle('show');
    button.classList.toggle('rotate');

    if (sidebar.classList.contains('close'))
    {
        sidebar.classList.toggle('close')
        toggleButton.classList.toggle('rotate')
    }
}

// Responsive closing Sub menus
function closeAllSubMenus()
{
    Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
    ul.classList.remove('show');
    ul.previousElementSibling.classList.remove('rotate');
    })
}
// SideBar


// Category
const category_form = document.getElementById('categoryForm');

// Opening Form
function showForm()
{
    category_form.style.display = 'block';
}

// Closing Form
function closeForm()
{
    category_form.style.display = 'none';
}
// Category