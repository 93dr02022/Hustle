import { createPopper } from "@popperjs/core";

/**
 * App utilitly helper methods.
 * @author logic
 */
function LogicDropdown() {
    /**
     * Dropdown instance
     */
    let _this = {};

    /**
     * Default config Options
     */
    _this._options = {
        placement: "bottom",
    };

    /**
     * default placement
     */
    const placements = [
        "bottom",
        "top",
        "right",
        "left",
        "bottom-start",
        "bottom-end",
        "top-start",
        "top-end",
        "right-start",
        "right-end",
        "left-start",
        "left-end",
    ];

    /**
     * Poppr instance
     * @type object
     */
    _this.popper = null;

    /**
     * temporary trigger element
     * @type HTMElement
     */
    _this.tempTriggerEl = null;

    /**
     * temporary target element
     * @type HTMElement
     */
    _this.tempTargetEl = null;

    /**
     * Add Initial event
     */
    function _construct() {
        document.addEventListener("click", (e) => {
            toggle(e);
        });
    }

    /**
     * Constructor function
     */
    _construct();

    /**
     * Creates a new popper instance
     * @param {HTMLelement} triggerEl
     * @param {HTMLelement} targetEl
     * @returns Object
     */
    function makePopper(triggerEl, targetEl) {
        let place = placements.includes(triggerEl.dataset.popperPlacement)
            ? triggerEl.dataset.popperPlacement
            : placements[0];
        return createPopper(triggerEl, targetEl, {
            placement: place,
            modifiers: [
                {
                    name: "offset",
                    options: {
                        offset: [0, Number(triggerEl?.dataset?.offset ?? 7)],
                    },
                },
            ],
        });
    }

    /**
     * Handle Click outside in other to close dropdown
     * @param {event} ev
     */
    function outClick(ev) {
        const clickedEl = ev.target;
        const triggerEl = _this.tempTriggerEl;
        const targetEl = _this.tempTargetEl;

        if (
            clickedEl !== targetEl &&
            !targetEl.contains(clickedEl) &&
            !triggerEl.contains(clickedEl)
        ) {
            hide(targetEl);
        }
    }

    /**
     * Toggle event for popper trigers
     * @param {event} e
     */
    function toggle(e) {
        if (
            e.target.dataset.lcToggle == "dropdown" &&
            e.target.classList.contains("active")
        ) {
            hide(e.target.nextElementSibling);
        } else {
            if (
                e.target.dataset.lcToggle == "dropdown" ||
                e.target.parentElement.dataset.lcToggle == "dropdown"
            ) {
                _this.popper = makePopper(
                    e.target,
                    e.target.nextElementSibling
                );
                show(e.target);
            }
        }
    }

    /**
     * Display target element
     * @param {HTMLElement} triggerEl
     */
    function show(triggerEl) {
        triggerEl.classList.add("active");
        triggerEl.nextElementSibling.classList.remove("hidden");
        triggerEl.nextElementSibling.classList.add("block");

        // Enable popper event listeners
        _this.popper.setOptions((options) => ({
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: "eventListeners", enabled: true },
            ],
        }));

        _this.tempTriggerEl = triggerEl;
        _this.tempTargetEl = triggerEl.nextElementSibling;

        document.body.addEventListener("click", outClick, true);

        // Tell popper to update position
        _this.popper.update();
    }

    /**
     * Hide dropdown target element
     * @param {HTMLElement} targetEl
     */
    async function hide(targetEl) {
        targetEl.classList.remove("block");
        targetEl.classList.add("hidden");
        targetEl.previousElementSibling.classList.remove("active");

        // Disable the event listeners
        await _this.popper.setOptions((options) => ({
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: "eventListeners", enabled: false },
            ],
        }));

        document.body.removeEventListener("click", outClick, true);
        targetEl.setAttribute("style", " ");
    }
}

// export default Dropdown;

new LogicDropdown();
