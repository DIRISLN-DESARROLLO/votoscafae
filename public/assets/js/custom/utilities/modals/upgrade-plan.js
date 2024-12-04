/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*********************************************************!*\
  !*** ../src/js/custom/utilities/modals/upgrade-plan.js ***!
  \*********************************************************/


// Class definition
var KTModalUpgradePlan = function () {
    // Private variables
    var modal;
	var planPeriodMonthButton;
	var planPeriodAnnualButton;
    var planUpgradeButton;

    // Private functions
	var changePlanPrices = function(type) {
		var items = [].slice.call(modal.querySelectorAll('[data-kt-plan-price-month]'));

		items.map(function (item) {
			var monthPrice = item.getAttribute('data-kt-plan-price-month');
			var annualPrice = item.getAttribute('data-kt-plan-price-annual');

			if ( type === 'month' ) {
				item.innerHTML = monthPrice;
			} else if ( type === 'annual' ) {
				item.innerHTML = annualPrice;
			}
		});
	}

    var handlePlanPeriodSelection = function() {
        // Handle period change
        planPeriodMonthButton.addEventListener('click', function (e) {
            e.preventDefault();

            planPeriodMonthButton.classList.add('active');
            planPeriodAnnualButton.classList.remove('active');

            changePlanPrices('month');
        });

		planPeriodAnnualButton.addEventListener('click', function (e) {
            e.preventDefault();

            planPeriodMonthButton.classList.remove('active');
            planPeriodAnnualButton.classList.add('active');

            changePlanPrices('annual');
        });
    }

    var handlePlanUpgrade = function () {
        if ( !planUpgradeButton ) {
            return;
        }

        planUpgradeButton.addEventListener('click', function (e) {
            e.preventDefault();

            var el = this;

            swal.fire({
                text: "Seguro que desea votar ahora?",
                icon: "warning",
                buttonsStyling: false,
                showDenyButton: true,
                confirmButtonText: "Si",
                denyButtonText: 'No',
                customClass: {
                    confirmButton: "btn btn-primary",
                    denyButton: "btn btn-light-danger"
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    el.setAttribute('data-kt-indicator', 'on');
                    el.disabled = true;

                    setTimeout(function() {
                        Swal.fire({
                            text: 'Su voto ha sido registrado con exito, los resultados seran publicados a las 4:30 PM!',
                            icon: 'success',
                            confirmButtonText: "Ok",
                            buttonsStyling: false,
                            customClass: {
                                confirmButton: "btn btn-light-primary"
                            }
                        }).then((result) => {
                            bootstrap.Modal.getInstance(modal).hide();
                        })

                    }, 2000);
                }
            });
        });
    }

    // Public methods
    return {
        init: function () {
            // Elements
            modal = document.querySelector('#kt_modal_upgrade_plan');

            if (!modal) {
				return;
			}


            planUpgradeButton = document.querySelector('#kt_modal_upgrade_plan_btn');

            // Handlers

            handlePlanUpgrade();

        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTModalUpgradePlan.init();
});

/******/ })()
;
//# sourceMappingURL=upgrade-plan.js.map
