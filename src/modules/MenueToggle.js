const MenueToggle = () => {
  let expand = false;
  const nav = document.querySelector('.left-nav');
  document.querySelector('.lef-nav-menue-bar-i').addEventListener('click', () => {
    if (!expand) {
      nav.style.width = '14rem';
      expand = true;
      document.querySelectorAll('.icon-des').forEach((sp) => {
        sp.classList.remove('display-none');
      });
    } else {
      nav.style.width = '4rem';
      nav.style.opacity = 1;
      expand = false;
      document.querySelectorAll('.icon-des').forEach((sp) => {
        sp.classList.add('display-none');
      });
    }
  });
};

export default MenueToggle;