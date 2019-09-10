function resizeGridItem(item) {
    grid = document.getElementsByClassName("testimonials")[0];
    rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
    rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
    rowSpan = Math.ceil((item.querySelector('.comment-box').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
    item.style.gridRowEnd = "span " + rowSpan;
}

function resizeAllGridItems() {
    allItems = document.getElementsByClassName("comment-item");
    for (x = 0; x < allItems.length; x++) {
        resizeGridItem(allItems[x]);
    }
}
window.onload = resizeAllGridItems();
window.addEventListener("resize", resizeAllGridItems);

function resizeInstance(instance) {
    item = instance.elements[0];
    resizeGridItem(item);
}