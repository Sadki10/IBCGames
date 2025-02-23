"use strict";
const StarRating = function() {
    let self = this;

    this.initialize = () => {
        this.eventDelegation();
    };

    this.eventDelegation = () => {
        $("[data-element='game'] [data-star-rating]").on("click", function() {
            let selectedValue = $(this).data("value")
            let container = $(this).parent().parent();
            self.setRatingValue(selectedValue, container);
            self.highlightStars(selectedValue, container);
        });
    };

    this.highlightStars = function (value, container) {
        container.find("li[data-star-rating]").each(function(){
            let starIcon = $(this).find("i");
            if ($(this).data("value") <= value) {
                self.setFullStar(starIcon);
            } else {
                self.setEmptyStar(starIcon);
            }
        });
    };

    this.setRatingValue = function (value, container) {
        container.find("[data-star-input]").val(value);
        container.find('[data-star-text]').text(value);
    };

    this.setEmptyStar = function (starElement) {
        starElement.addClass("fa-star-o");
        starElement.removeClass("fa-star");
    };

    this.setFullStar = function (starElement) {
        starElement.addClass("fa-star");
        starElement.removeClass("fa-star-o");
    };

    this.initialize();
}

new StarRating();
