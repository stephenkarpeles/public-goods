// Modal
const modalWindow = document.querySelector('.modal');
const modalTrigger = document.querySelector('.modal__trigger');
const modalInterior = document.querySelector('.modal__interior');
const modalClose = document.querySelector('.modal__close');

if(modalTrigger) {
    modalTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    modalWindow.classList.add('is-open');
  });
}

if(modalClose) {
  modalClose.addEventListener('click', (e) => {
    e.preventDefault();
    modalWindow.classList.remove('is-open');
  });
}

// Sharebar
const sharebar = document.querySelector('.a2a_kit.a2a_default_style');

sharebarClose = document.createElement('div');
sharebarClose.setAttribute('class', 'sharebar-close');
sharebarClose.innerHTML = '&times;';
sharebar.appendChild(sharebarClose);

sharebarText = document.createElement('div');
sharebarText.setAttribute('class', 'sharebar-text');
sharebarText.innerHTML = 'Share';
sharebar.appendChild(sharebarText);

if(sharebar) {
    sharebarClose.addEventListener('click', (e) => {
    e.preventDefault();
    sharebar.classList.add('is-closed');
  });
}

// Fixed sidebar on scroll adjustment
window.onscroll = function (ev) {
  const content = document.querySelector('.content-area');
  const sidebar = document.querySelector('.sidebar');
  const blogWrapper = document.querySelector('.blog .site');
  const sidebarHeight = sidebar.offsetHeight;
  const contentHeight = content.offsetHeight;
  const viewportHeight = window.innerHeight;
  const scrollTop = window.pageYOffset || document.body.scrollTop;
  
  if (scrollTop > (contentHeight - 1000)) {
    sidebar.classList.add('is-not-fixed-sidebar');
    //sidebar.style.marginBottom = "-" + sidebarHeight + "px";
    //blogWrapper.style.marginBottom = "-" + sidebarHeight + "px";
  } else {
    sidebar.classList.remove('is-not-fixed-sidebar');
  }

  if (scrollTop > (contentHeight - 400)) {
    sidebar.classList.add('is-fully-hidden-sidebar');
  } else {
    sidebar.classList.remove('is-fully-hidden-sidebar');
  }
};

// Drip Form
const emailForm = document.forms['email-capture']  
//     let emailInput = document.getElementById('emailinput').value
  let emailConfirm = document.getElementById('email-footer-confirmation')
    
    let footerEmail = document.getElementById('email-success')
    let subscribeButton = document.getElementById('drip-submit-27436')
  if (document.forms['email-capture']) {
    emailForm.addEventListener('submit', e => {  
     e.preventDefault()  
     let emailText = emailForm.elements.namedItem("email").value;
     
 
       _dcq.push(
      [
        "subscribe",
        {
          campaign_id: "220285039",
          fields: {
            email: emailText
          }
        }
      ]
       )
//      _dcq.push(["identify", {
//         email: emailText,
//        tags: ["Membership trial cj"],
//          user_id: emailText,
//       }]);
       emailForm.style.display = "none"
       emailConfirm.innerHTML = '<div class="drip-form--sidebar"><h3>Get the goods.</h3><div>Thanks for signing up. Please check your email and confirm your subscription.</div></div>'
       emailForm.reset()       
     })
}