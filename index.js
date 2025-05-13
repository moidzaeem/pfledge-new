
// ######################## BLOG PAGE CONTENT SHOW/HIDE ############################

document.addEventListener('DOMContentLoaded', function() {

  const btn = document.querySelector('.hide-show-btn');
  const content = document.querySelector('.hide-show-content');
  
  // Set initial state to hidden
  content.style.display = 'none';
  
  btn.addEventListener('click', function() {
    if (content.style.display === 'none') {
      // Show content and rotate button
      content.style.display = 'block';
      btn.classList.add('rotate');
    } else {
      // Hide content and reset rotation
      content.style.display = 'none';
      btn.classList.remove('rotate');
    }
  });
  
});
document.addEventListener('DOMContentLoaded', function() {
  document.querySelector('.navbar-toggler').addEventListener('click', function() {
    const navbarContainer = document.querySelector('.navbar-container');
    
    // Delay to ensure aria-expanded has updated
    setTimeout(() => {
      const isExpanded = this.getAttribute('aria-expanded') === 'true';
      
      // Toggle background color based on the current aria-expanded state
      navbarContainer.style.backgroundColor = isExpanded ? '#000000' : '#000000A3';
    }, 10); // Short delay to wait for aria-expanded update
  });
  
    });

// ######################## ACADEMY PAGE SLIDER ############################

document.addEventListener('DOMContentLoaded', function() {

  const cards = document.querySelectorAll('.academy-card');
  const dots = document.querySelectorAll('.academy-dot');
  let currentIndex = 1; // Start with the second card (center)

  // Update active card and dot
  function updateSlider(index) {
    cards.forEach((card, i) => {
      card.classList.toggle('active', i === index);
      card.classList.toggle('inactive', i !== index);
    });
    
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
  }

  // Set initial state
  updateSlider(currentIndex);

  // Dot pagination click event
  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      currentIndex = i;
      updateSlider(currentIndex);
    });
  });

  // Card click event to make clicked card active
  cards.forEach((card, i) => {
    card.addEventListener('click', () => {
      currentIndex = i;
      updateSlider(currentIndex);
    });
  });

});



// ####################### IMPRESSUM ACCODION #########################

document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.impressum-accordion1-top-div').forEach((accordionTop) => {
      accordionTop.addEventListener('click', function () {
          // Close all active accordions except the one being clicked
          document.querySelectorAll('.impressum-accordion1-bottom-div.active').forEach((openAccordion) => {
              if (openAccordion !== this.nextElementSibling) {
                  openAccordion.classList.remove('active');
                  openAccordion.previousElementSibling.querySelector('.accordion-icon').classList.remove('rotated');
              }
          });

          // Toggle visibility and rotation only for the clicked accordion
          const bottomDiv = this.nextElementSibling;
          const icon = this.querySelector('.accordion-icon');
          
          bottomDiv.classList.toggle('active');
          icon.classList.toggle('rotated');
      });
  });
});


// ########################### CHEKCLISTEN BUTTONS ###########################


document.addEventListener('DOMContentLoaded', function() {
  // Function to show specific content and hide others
  function showContent(buttonId, contentId) {
      // Hide all content containers
      const allContents = document.querySelectorAll('.check-listen-forms');
      allContents.forEach(content => content.style.display = 'none');

      // Show the specific content container
      const contentElement = document.getElementById(contentId);
      if (contentElement) {
          contentElement.style.display = 'block';
      }

      // Remove active class from all buttons
      const allButtons = document.querySelectorAll('.check-bottom-btns');
      allButtons.forEach(button => button.classList.remove('check-active-btn'));

      // Add active class to the clicked button
      const buttonElement = document.getElementById(buttonId);
      if (buttonElement) {
          buttonElement.classList.add('check-active-btn');
      }
  }


  const buttonContentGroups = [
      { buttonIds: ['checklisten-bottom-btn11', 'checklisten-bottom-btn12', 'checklisten-bottom-btn13', 'checklisten-bottom-btn14'], contentIds: ['medi-form1', 'medi-form2', 'medi-form3', 'medi-form4'] },

      { buttonIds: ['checklisten-bottom-btn21', 'checklisten-bottom-btn22', 'checklisten-bottom-btn23'], contentIds: ['termi-form1', 'termi-form2', 'termi-form3'] },

      { buttonIds: ['checklisten-bottom-btn31', 'checklisten-bottom-btn32','checklisten-bottom-btn33','checklisten-bottom-btn34'], contentIds: ['hausl-form1', 'hausl-form2','hausl-form3','hausl-form4'] },

      { buttonIds: ['checklisten-bottom-btn41', 'checklisten-bottom-btn42', 'checklisten-bottom-btn43'], contentIds: ['psyc-form1', 'psyc-form2', 'psyc-form3'] },

      { buttonIds: ['checklisten-bottom-btn51', 'checklisten-bottom-btn52','checklisten-bottom-btn53'], contentIds: ['fina-form1', 'fina-form2','fina-form3'] },
      
      { buttonIds: ['checklisten-bottom-btn61', 'checklisten-bottom-btn62', 'checklisten-bottom-btn63'], contentIds: ['notf-form1', 'notf-form2', 'notf-form3'] },

      { buttonIds: ['checklisten-bottom-btn71', 'checklisten-bottom-btn72', 'checklisten-bottom-btn73' ], contentIds: ['gesu-form1', 'gesu-form2', 'gesu-form3'] }
  ];

  // Loop through each group and add event listeners
  buttonContentGroups.forEach(group => {
      group.buttonIds.forEach((buttonId, index) => {
          const buttonElement = document.getElementById(buttonId);
          const contentId = group.contentIds[index];

          // Ensure both button and content elements exist before attaching event listeners
          if (buttonElement && document.getElementById(contentId)) {
              buttonElement.addEventListener('click', function() {
                  showContent(buttonId, contentId);
              });
          } else {
              console.warn(`Element missing for button ID: ${buttonId} or content ID: ${contentId}`);
          }
      });
  });
});

// ################################ MUSTERANSCHREIBEN (COVER LETTER) BUTTONS ################################

document.addEventListener('DOMContentLoaded', function() {
  // Function to show specific content and hide others
  function showContent(buttonId, contentId) {
      // Hide all content containers
      const allContents = document.querySelectorAll('.cover-letter-section3-sub');
      allContents.forEach(content => content.style.display = 'none');
      
      // Show the specific content container
      const contentElement = document.getElementById(contentId);
      if (contentElement) {
          contentElement.style.display = 'block';
      }

      // Remove active class from all buttons
      const allButtons = document.querySelectorAll('.cover-letter-bottom-btn');
      allButtons.forEach(button => button.classList.remove('cover-letter-active-btn'));

      // Add active class to the clicked button
      const buttonElement = document.getElementById(buttonId);
      if (buttonElement) {
          buttonElement.classList.add('cover-letter-active-btn');
      }
  }

  // Add event listeners to each button
  const buttonIds = [
      'cover-letter-bottom-btn11', 'cover-letter-bottom-btn12', 'cover-letter-bottom-btn13',
      'cover-letter-bottom-btn14', 'cover-letter-bottom-btn15', 'cover-letter-bottom-btn16',
      'cover-letter-bottom-btn17',
  ];

  buttonIds.forEach((buttonId, index) => {
      const contentId = `cover-letter-content-${11 + index}`;
      const buttonElement = document.getElementById(buttonId);
      if (buttonElement) { // Only add the event listener if the button exists
          buttonElement.addEventListener('click', function() {
              showContent(buttonId, contentId);
          });
      }
  });
});


// ################################ FÜR PFLEGENDE ANGEHÖRIGE (COVER LETTER) BUTTONS ################################

document.addEventListener('DOMContentLoaded', function() {
  console.log('DOM fully loaded and parsed'); // Initial log when the DOM is ready

  function showContent(buttonId, contentId) {
      console.log(`Showing content for: ${contentId}`); // Log when content is shown

      // Hide all content containers
      const allContents = document.querySelectorAll('.cover-letter-section3-sub2');
      allContents.forEach(content => {
          content.style.display = 'none';
      });

      // Show the specific content container
      const contentElement = document.getElementById(contentId);
      if (contentElement) {
          contentElement.style.display = 'block';
      } else {
          console.log(`Content element not found for ID: ${contentId}`);
      }

      // Remove active class from all buttons
      const allButtons = document.querySelectorAll('.cover-letter-bottom-btn2');
      allButtons.forEach(button => button.classList.remove('cover-letter-active-btn'));

      // Add active class to the clicked button
      const buttonElement = document.getElementById(buttonId);
      if (buttonElement) {
          buttonElement.classList.add('cover-letter-active-btn');
      }
  }

  // Add event listeners to each button
  for (let i = 21; i <= 29; i++) {
      const buttonId = `cover-letter-bottom-btn${i}`;
      const contentId = `cover-letter-content-${i}`;
      const buttonElement = document.getElementById(buttonId);

      if (buttonElement) {
          buttonElement.addEventListener('click', function() {
              console.log(`Button clicked: ${buttonId}`); // Log button click
              showContent(buttonId, contentId);
          });
      } else {
          console.log(`Button element not found for ID: ${buttonId}`);
      }
  }

  // Handle the last button (210)
  const buttonId210 = `cover-letter-bottom-btn210`;
  const contentId210 = `cover-letter-content-210`;
  const buttonElement210 = document.getElementById(buttonId210);

  if (buttonElement210) {
      buttonElement210.addEventListener('click', function() {
          console.log(`Button clicked: ${buttonId210}`); // Log button click
          showContent(buttonId210, contentId210);
      });
  } else {
      console.log(`Button element not found for ID: ${buttonId210}`);
  }
});



// ################################ ONLINE RECHNER BUTTONS MODULE ################################

  document.addEventListener('DOMContentLoaded', function() {
    // Function to show specific content and hide others
    function showContent(buttonId, contentId) {
      // Hide all content containers
      const allContents = document.querySelectorAll('.online-rechner-section3-form');
      allContents.forEach(content => content.style.display = 'none');
      
      // Show the specific content container
      document.getElementById(contentId).style.display = 'block';
  
      // Remove active class from all buttons
      const allButtons = document.querySelectorAll('.online-rechner-section3-btn');
      allButtons.forEach(button => button.classList.remove('active-btn2'));
  
      // Add active class to the clicked button
      document.getElementById(buttonId).classList.add('active-btn2');
    }
  
    // Add event listeners to each button
    document.getElementById('module1-btn').addEventListener('click', function() {
      showContent('module1-btn', 'module1Form');
    });
    document.getElementById('module2-btn').addEventListener('click', function() {
      showContent('module2-btn', 'module2Form');
    });
   
    document.getElementById('module3-btn').addEventListener('click', function() {
      showContent('module3-btn', 'module3Form');
    });
   
    document.getElementById('module4-btn').addEventListener('click', function() {
      showContent('module4-btn', 'module4Form');
    });
   
    document.getElementById('module5-btn').addEventListener('click', function() {
      showContent('module5-btn', 'module5Form');
    });
   
    document.getElementById('module6-btn').addEventListener('click', function() {
      showContent('module6-btn', 'module6Form');
    });
   
   
  });
  

// ################################ NEWS SUBCATEGORY BUTTONS ################################

document.addEventListener('DOMContentLoaded', function() {
  // Function to show specific content and hide others
  function showContent(buttonId, contentId) {
    // Hide all content containers
    const allContents = document.querySelectorAll('.newund-section2-row');
    allContents.forEach(content => content.style.display = 'none');
    
    // Show the specific content container
    document.getElementById(contentId).style.display = 'block';

    // Remove active class from all buttons
    const allButtons = document.querySelectorAll('.news-und-btns');
    allButtons.forEach(button => button.classList.remove('news-active-btn'));

    // Add active class to the clicked button
    document.getElementById(buttonId).classList.add('news-active-btn');
  }

  // Add event listeners to each button
  document.getElementById('news-bottom-btn1 ').addEventListener('click', function() {
    showContent('news-bottom-btn1 ', 'newsund-section2-content1');
  });
  document.getElementById('news-bottom-btn2').addEventListener('click', function() {
    showContent('news-bottom-btn2', 'newsund-section2-content2');
  });
 
  document.getElementById('news-bottom-btn3').addEventListener('click', function() {
    showContent('news-bottom-btn3', 'newsund-section2-content3');
  });
 
});



// ################################ INDEX PAGE NEWS SUBCATEGORY BUTTONS ################################

document.addEventListener('DOMContentLoaded', function() {
  // Function to show specific content and hide others
  function showContent(buttonId, contentId) {
    // Hide all content containers
    const allContents = document.querySelectorAll('.index-news-bottom');
    allContents.forEach(content => content.style.display = 'none');
    
    // Show the specific content container
    document.getElementById(contentId).style.display = 'flex';

    // Remove active class from all buttons
    const allButtons = document.querySelectorAll('.index-news-top-btn');
    allButtons.forEach(button => button.classList.remove('index-news-active-btn'));

    // Add active class to the clicked button
    document.getElementById(buttonId).classList.add('index-news-active-btn');
  }

  // Add event listeners to each button
  document.getElementById('index-new-top-btn1').addEventListener('click', function() {
    showContent('index-new-top-btn1', 'index-news-bottom1');
  });
  document.getElementById('index-new-top-btn2').addEventListener('click', function() {
    showContent('index-new-top-btn2', 'index-news-bottom2');
  });
 
  document.getElementById('index-new-top-btn3').addEventListener('click', function() {
    showContent('index-new-top-btn3', 'index-news-bottom3');
  });

});



// ############################# NEW POPUP ##############################
document.addEventListener('DOMContentLoaded', function() {
  // Close overlay and popups
  document.querySelectorAll('.news-popup-overlay, .close-popup, .news-popup-btn').forEach(element => {
    element.addEventListener('click', function() {
      document.querySelector('.news-popup-overlay').style.display = 'none';
      document.querySelectorAll('.news-info-popup').forEach(popup => {
        popup.style.display = 'none';
      });
      document.body.style.overflow = ''; // Re-enable body scroll
    });
  });

  // Reusable function to open specific popup
  function openPopup(overlaySelector, popupSelector) {
    document.querySelector(overlaySelector).style.display = 'block';
    document.querySelector(popupSelector).style.display = 'block';
    document.body.style.overflow = 'hidden'; // Disable body scroll
  }

  // Mapping info-circle images to their corresponding popups
  const popupMappings = {
    '.info-circle-img1': '.news-info-popup1',
    '.info-circle-img2': '.news-info-popup2',
    '.info-circle-img3': '.news-info-popup3',
    '.info-circle-img4': '.news-info-popup4',
    '.info-circle-img5': '.news-info-popup5',
    '.info-circle-img6': '.news-info-popup6',
    '.info-circle-img7': '.news-info-popup7',
    '.info-circle-img8': '.news-info-popup8',
    '.info-circle-img9': '.news-info-popup9',
    '.info-circle-img10': '.news-info-popup10',
    '.info-circle-img11': '.news-info-popup11',
    '.info-circle-img12': '.news-info-popup12',
    '.info-circle-img13': '.news-info-popup13'
  };

  // Loop through the mappings and add event listeners
  Object.keys(popupMappings).forEach(selector => {
    document.querySelectorAll(selector).forEach(element => {
      element.addEventListener('click', function() {
        openPopup('.news-popup-overlay', popupMappings[selector]);
      });
    });
  });
});















document.addEventListener('DOMContentLoaded', function() {
  // Function to show specific content and hide others
  function showContent(buttonId, contentId) {
    // Hide all content containers
    const allContents = document.querySelectorAll('.rechner-calculators');
    allContents.forEach(content => content.style.display = 'none');
    
    // Show the specific content container
    document.getElementById(contentId).style.display = 'block';


  }

  // Add event listeners to each button
  document.querySelectorAll('#calculator-btn0').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn0', 'calculator0');
    });
  });
  document.querySelectorAll('#calculator-btn1').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn1', 'calculator1');
    });
  });
  document.querySelectorAll('#calculator-btn2').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn2', 'calculator2');
    });
  });
  document.querySelectorAll('#calculator-btn3').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn3', 'calculator3');
    });
  });
  document.querySelectorAll('#calculator-btn4').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn4', 'calculator4');
    });
  });
  document.querySelectorAll('#calculator-btn5').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn5', 'calculator5');
    });
  });
  document.querySelectorAll('#calculator-btn6').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn6', 'calculator6');
    });
  });
  document.querySelectorAll('#calculator-btn7').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn7', 'calculator7');
    });
  });
  document.querySelectorAll('#calculator-btn8').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn8', 'calculator8');
    });
  });
  document.querySelectorAll('#calculator-btn9').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn9', 'calculator9');
    });
  });
  document.querySelectorAll('#calculator-btn10').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn10', 'calculator10');
    });
  });
  document.querySelectorAll('#calculator-btn11').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn11', 'calculator11');
    });
  });
  document.querySelectorAll('#calculator-btn12').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn12', 'calculator12');
    });
  });
  document.querySelectorAll('#calculator-btn13').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn13', 'calculator13');
    });
  });
  document.querySelectorAll('#calculator-btn14').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn14', 'calculator14');
    });
  });
  document.querySelectorAll('#calculator-btn15').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn15', 'calculator15');
    });
  });
  document.querySelectorAll('#calculator-btn16').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn16', 'calculator16');
    });
  });
  document.querySelectorAll('#calculator-btn17').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn17', 'calculator17');
    });
  });
  document.querySelectorAll('#calculator-btn18').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn18', 'calculator18');
    });
  });
  document.querySelectorAll('#calculator-btn19').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn19', 'calculator19');
    });
  });
  document.querySelectorAll('#calculator-btn20').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn20', 'calculator20');
    });
  });
  document.querySelectorAll('#calculator-btn21').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn21', 'calculator21');
    });
  });
  document.querySelectorAll('#calculator-btn22').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn22', 'calculator22');
    });
  });
  document.querySelectorAll('#calculator-btn23').forEach(function(button) {
    button.addEventListener('click', function() {
      showContent('calculator-btn23', 'calculator23');
    });
  });
  

});



// ###################### RECHNER_pflegeleistungen CALCULATION ########################

document.addEventListener('DOMContentLoaded', function () {
  // Check if stored results exist in localStorage
  const storedResults = JSON.parse(localStorage.getItem('pflegeResults'));

  // If there are stored results, don't reset the form
  if (storedResults) {
    Object.keys(storedResults).forEach((key) => {
      const element = document.getElementById(key);
      if (element) {
        // For the results, we update the textContent
        if (element.tagName === 'SPAN') {
          element.textContent = storedResults[key];
        } else {
          // For input fields, restore the value
          element.value = storedResults[key];
        }
      }
    });

    // Clear localStorage after displaying the values
    localStorage.removeItem('pflegeResults');
  } else {
    // If no stored results, set default values
    document.getElementById('pflegegrad1').value = '1';  // Default value for pflegegrad1
    document.getElementById('pflegedienst').value = '0';  // Default value for pflegedienst
  }

  // Object to map selected values to content for each div
  const contentMap = {
    "1": {
      div1: "Ausgewählter Pflegegrad: 1",
      div2: "Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 131 EUR der Kosten durch die Pflegekasse ersetzt. <br> Denn für Pflegegrad 1 gewährt die Pflegekasse den Entlastungsbetrag gemäß § 45b in Höhe von monatlich 125 Euro ausnahmsweise auch für die Sachleistung durch den Pflegedienst (Grundpflege). Zudem stehen Pflege­bedürftigen mit Pflegegrad 1 zwei kostenlose Pflegeberatungsbesuche pro Jahr zu.",
      div3: "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 131 EUR)"
    },
    "2": {
      div1: "Ausgewählter Pflegegrad: 2",
      div2: "Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 796 EUR der Kosten durch die Pflegekasse ersetzt.<br> Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 347 EUR. Wird z.B die maximale Kassenleistung in Höhe von 796 EUR durch den Pflegedienst zu 60% (= 477,60 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 347 EUR (= 138,80 EUR) ausgezahlt.",
      div3: "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 796 EUR)"
    },
    "3": {
      div1: "Ausgewählter Pflegegrad: 3",
      div2: "Sie können einen häuslichen Pflege­dienst in Anspruch nehmen und bekommen monatlich bis zu 1.497 EUR der Kosten durch die Pflegekasse ersetzt. <br> Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 599 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.497 EUR durch den Pflegedienst zu 60% (= 898,20 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 599 EUR (= 239,60 EUR) ausgezahlt.",
      div3: "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.497 EUR)"
    },
    "4": {
      div1: "Ausgewählter Pflegegrad: 4",
      div2: "Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 1.859 EUR der Kosten durch die Pflegekasse ersetzt. <br> Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 800 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.859 EUR durch den Pflegedienst zu 60% (= 1.155,40 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 800 EUR (= 320,00 EUR) ausgezahlt.",
      div3: "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.859 EUR)"
    },
    "5": {
      div1: "Ausgewählter Pflegegrad: 5",
      div2: "Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 2.299 EUR der Kosten durch die Pflegekasse ersetzt. <br> Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 990 EUR. Wird z.B die maximale Kassenleistung in Höhe von 2.299 EUR durch den Pflegedienst zu 60% (= 1.379,40 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 990 EUR (= 396,00 EUR) ausgezahlt.",
      div3: "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 2.299 EUR)"
    }
  };

  // Event listener to change content based on selected option
  document.getElementById('pflegegrad1').addEventListener('change', function () {
    var selectedValue = this.value;

    // Update the content of each div based on the selected value
    document.getElementById('div1').innerHTML = contentMap[selectedValue]?.div1 || "";
    document.getElementById('div2').innerHTML = contentMap[selectedValue]?.div2 || "";
    document.getElementById('div3').innerHTML = contentMap[selectedValue]?.div3 || "";
  });

  // Handle form submission without page reload or localStorage
  document.getElementById('pflegeForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form submission from reloading the page

    let pflegegrad = parseInt(document.getElementById('pflegegrad1').value, 10);
    let pflegedienst1 = parseInt(document.getElementById('pflegedienst').value, 10);
    pflegegrad=number(pflegegrad);
    pflegedienst1=number(pflegedienst1);    

    let sachleistung = 0;
    let sachleistungrestwert = 0;
    let pflegegeld = 0;
    let pflegegeldmax = 0;
    let tagesnachtpflege = 0;
    let pflegevollstationaer = 131;
    let verhinderungspflege = 0;
    let kurzzeitpflege = 0;
    let betreuungszusatz = 131;
    let wohngruppen = 224;
    let hilfsmittel = 42;
    let wohnumfeldverbesserung = 4180;

    // Logic based on Pflegegrad value
    if (pflegegrad === 1) {
      sachleistung = 0;
      pflegegeld = 0;
      pflegevollstationaer = 131;
    } else if (pflegegrad === 2) {
      sachleistung = 796;
      pflegegeld = 347;
      tagesnachtpflege = 721;
      pflegevollstationaer = 805;
      verhinderungspflege = 1685;
      kurzzeitpflege = 1854;

      if (pflegedienst1 === 0) {
        pflegegeldmax = pflegegeld;
      } else {
        sachleistungrestwert = ((sachleistung - pflegedienst1) / sachleistung) * 100;
        pflegegeldmax = (pflegegeld * sachleistungrestwert) / 100;
        if (pflegegeldmax < 0) {
          pflegegeldmax = 0;
        }        
      }
    } else if (pflegegrad === 3) {
      sachleistung = 1497;
      pflegegeld = 599;
      tagesnachtpflege = 1357;
      pflegevollstationaer = 1319;
      verhinderungspflege = 1685;
      kurzzeitpflege = 1854;
      if (pflegedienst1 === 0) {
        pflegegeldmax = pflegegeld;
      } else {
        sachleistungrestwert = ((sachleistung - pflegedienst1) / sachleistung) * 100;
        pflegegeldmax = (pflegegeld * sachleistungrestwert) / 100;
        if (pflegegeldmax < 0) {
          pflegegeldmax = 0;
        }
//              console.log(sachleistung);
//              console.log(pflegedienst1);
//              console.log(sachleistungrestwert);                            
      }
      
    } else if (pflegegrad === 4) {
      sachleistung = 1859;
      pflegegeld = 800;
      tagesnachtpflege = 1685;
      pflegevollstationaer = 1855;
      verhinderungspflege = 1685;
      kurzzeitpflege = 1854;
      if (pflegedienst1 === 0) {
        pflegegeldmax = pflegegeld;
      } else {
        sachleistungrestwert = ((sachleistung - pflegedienst1) / sachleistung) * 100;
        pflegegeldmax = (pflegegeld * sachleistungrestwert) / 100;
        if (pflegegeldmax < 0) {
          pflegegeldmax = 0;
        }
      }
      
    } else if (pflegegrad === 5) {
      sachleistung = 2299;
      pflegegeld = 990;
      tagesnachtpflege = 2085;
      pflegevollstationaer = 2096;
      verhinderungspflege = 1685;
      kurzzeitpflege = 1854;
      if (pflegedienst1 === 0) {
        pflegegeldmax = pflegegeld;
      } else {
        sachleistungrestwert = ((sachleistung - pflegedienst1) / sachleistung) * 100;
        pflegegeldmax = (pflegegeld * sachleistungrestwert) / 100;
        if (pflegegeldmax < 0) {
          pflegegeldmax = 0;
        }
      }
      
    }

    // Helper function to format numbers as currency
    const formatCurrency = (value) =>
      value.toLocaleString('de-DE', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + " EUR";

    // Helper function to format numbers with two decimal places and percent symbol
    const formatPercent = (value) =>
      value.toLocaleString('de-DE', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + " %";

    // Display the calculated values in their respective divs or spans
    document.getElementById('sachleistung').textContent = formatCurrency(sachleistung);
    document.getElementById('sachleistungrestwert').textContent = formatPercent(sachleistungrestwert);
    document.getElementById('pflegegeld').textContent = formatCurrency(pflegegeld);
    document.getElementById('pflegegeldmax').textContent = formatCurrency(pflegegeldmax);
    document.getElementById('tagesnachtpflege').textContent = formatCurrency(tagesnachtpflege);
    document.getElementById('pflegevollstationaer').textContent = formatCurrency(pflegevollstationaer);
    document.getElementById('verhinderungspflege').textContent = formatCurrency(verhinderungspflege);
    document.getElementById('kurzzeitpflege').textContent = formatCurrency(kurzzeitpflege);
    document.getElementById('betreuungszusatz').textContent = formatCurrency(betreuungszusatz);
    document.getElementById('wohngruppen').textContent = formatCurrency(wohngruppen);
    document.getElementById('hilfsmittel').textContent = formatCurrency(hilfsmittel);
    document.getElementById('wohnumfeldverbesserung').textContent = formatCurrency(wohnumfeldverbesserung);
  });
});

  
  
  





document.addEventListener('DOMContentLoaded', function() {
  // Get all elements with the class name 'ambulants'
  let ambulantElements = document.getElementsByClassName('ambulants');
  
  // Loop through all the elements and add the event listener to each
  for (let i = 0; i < ambulantElements.length; i++) {
    ambulantElements[i].addEventListener('input', function() {
      let value = this.value;
      // Check if the input has more than 4 digits
      if (value.length > 4) {
        this.value = value.slice(0, 4); // Trim to 4 digits
      }
    });
  }
});


        

// ###################### RECHNER_pflegekosten_im_pflegeheim CALCULATION ########################

document.addEventListener("DOMContentLoaded", function () {
  // Set default values for the dropdowns
  const defaultSelections = {
    bundesland: "9", // Default to Niedersachsen (replace with the value you want)
    pflegeart: "1" // Default to Pflegeart 1 (replace with the value you want)
  };

  // Set the dropdown values to the defaults
  document.getElementById("bundesland").value = defaultSelections.bundesland;
  document.getElementById("pflegeart").value = defaultSelections.pflegeart;

  document.getElementById("pflegekosten_im-btn").addEventListener("click", function (event) {
    event.preventDefault();

    const formatCurrency = (value) =>
      value.toLocaleString("de-DE", { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + " EUR";

    let bundesland = parseInt(document.getElementById("bundesland").value);
    let pflegeart = parseInt(document.getElementById("pflegeart").value);
    let zuschlag = 15;
    let pflegebedingtekosten = 1098;
    let pflegebedingtekostennachzuschlag = pflegebedingtekosten - (pflegebedingtekosten * zuschlag) / 100;
    let investitionskosten = 509;
    let verpflegungundunterkunftkosten = 754;
    let eigenanteil = pflegebedingtekostennachzuschlag + investitionskosten + verpflegungundunterkunftkosten;

    // Adjust Zuschlag based on Pflegeart selection
    if (pflegeart === 1) zuschlag = 15;
    else if (pflegeart === 2) zuschlag = 30;
    else if (pflegeart === 3) zuschlag = 50;
    else if (pflegeart === 4) zuschlag = 75;

    // Set the values based on Bundesland
    switch (bundesland) {
      case 1: // Baden-Württemberg
        pflegebedingtekosten = 1550;
        investitionskosten = 457;
        verpflegungundunterkunftkosten = 983;
        break;
      case 2: // Bayern
        pflegebedingtekosten = 1332;
        investitionskosten = 419;
        verpflegungundunterkunftkosten = 764;
        break;
      case 3: // Berlin
        pflegebedingtekosten = 1459;
        investitionskosten = 411;
        verpflegungundunterkunftkosten = 712;
        break;
      case 4: // Brandenburg
        pflegebedingtekosten = 1236;
        investitionskosten = 311;
        verpflegungundunterkunftkosten = 770;
        break;
      case 5: // Bremen
        pflegebedingtekosten = 1118;
        investitionskosten = 538;
        verpflegungundunterkunftkosten = 904;
        break;
      case 6: // Hamburg
        pflegebedingtekosten = 1054;
        investitionskosten = 569;
        verpflegungundunterkunftkosten = 886;
        break;
      case 7: // Hessen
        pflegebedingtekosten = 1261;
        investitionskosten = 510;
        verpflegungundunterkunftkosten = 795;
        break;
      case 8: // Mecklenburg-Vorpommern
        pflegebedingtekosten = 1232;
        investitionskosten = 350;
        verpflegungundunterkunftkosten = 716;
        break;
      case 9: // Niedersachsen
        pflegebedingtekosten = 1098;
        investitionskosten = 509;
        verpflegungundunterkunftkosten = 754;
        break;
      case 10: // Nordrhein-Westfalen
        pflegebedingtekosten = 1149;
        investitionskosten = 572;
        verpflegungundunterkunftkosten = 1137;
        break;
      case 11: // Rheinland-Pfalz
        pflegebedingtekosten = 1161;
        investitionskosten = 463;
        verpflegungundunterkunftkosten = 1093;
        break;
      case 12: // Saarland
        pflegebedingtekosten = 1336;
        investitionskosten = 517;
        verpflegungundunterkunftkosten = 1055;
        break;
      case 13: // Sachsen
        pflegebedingtekosten = 1291;
        investitionskosten = 438;
        verpflegungundunterkunftkosten = 723;
        break;
      case 14: // Sachsen-Anhalt
        pflegebedingtekosten = 1048;
        investitionskosten = 308;
        verpflegungundunterkunftkosten = 691;
        break;
      case 15: // Schleswig-Holstein
        pflegebedingtekosten = 1115;
        investitionskosten = 513;
        verpflegungundunterkunftkosten = 870;
        break;
      case 16: // Thüringen
        pflegebedingtekosten = 1120;
        investitionskosten = 380;
        verpflegungundunterkunftkosten = 804;
        break;
      default:
        break;
    }

    pflegebedingtekostennachzuschlag = pflegebedingtekosten - (pflegebedingtekosten * zuschlag) / 100;
    eigenanteil = pflegebedingtekostennachzuschlag + investitionskosten + verpflegungundunterkunftkosten;

    // Display the results (instead of saving them)
    document.getElementById("pflegebedingtekosten").textContent = formatCurrency(pflegebedingtekosten);
    document.getElementById("pflegebedingtekostennachzuschlag").textContent = formatCurrency(pflegebedingtekostennachzuschlag);
    document.getElementById("investitionskosten").textContent = formatCurrency(investitionskosten);
    document.getElementById("verpflegungundunterkunftkosten").textContent = formatCurrency(verpflegungundunterkunftkosten);
    document.getElementById("eigenanteil").textContent = formatCurrency(eigenanteil);
  });
});



// ###################### RECHNER_zuzahlungen CALCULATION ########################

document.addEventListener("DOMContentLoaded", function () {
 
  
});




document.addEventListener('DOMContentLoaded', function() {
  // Get all elements with the class name 'ambulants'
  let ambulantElements = document.getElementsByClassName('ambulants2');
  
  // Loop through all the elements and add the event listener to each
  for (let i = 0; i < ambulantElements.length; i++) {
    ambulantElements[i].addEventListener('input', function() {
      let value = this.value;
      // Check if the input has more than 2 digits
      if (value.length > 2) {
        this.value = value.slice(0, 2); // Trim to 2 digits
      }
    });
  }
});


document.addEventListener('DOMContentLoaded', function() {
  // Get all elements with the class name 'ambulants'
  let ambulantElements = document.getElementsByClassName('ambulants3');
  
  // Loop through all the elements and add the event listener to each
  for (let i = 0; i < ambulantElements.length; i++) {
    ambulantElements[i].addEventListener('input', function() {
      let value = this.value;
      // Check if the input has more than 7 digits
      if (value.length > 7) {
        this.value = value.slice(0, 7); // Trim to 7 digits
      }
    });
  }
});


// ###################### RECHNER_Pflegeld CALCULATION ########################


