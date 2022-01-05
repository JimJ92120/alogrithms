function draw_tree_row(length, row) {
  let spaces_count = length - row;
  let stars_count = (row * 2) - 1;
  
  return ' '.repeat(spaces_count) + '*'.repeat(stars_count);
}

function xmasTree(number) {
  if (number <= 2) {
    return console.log('not valid!');
  }
  
  const width = Math.floor(number / 5) + 1;
  
  return [...Array(number).keys()].reduce(
    (accumulator, currentValue, currentIndex) => {
      console.log(draw_tree_row(number, currentValue + 1));
      
      if ((currentValue + 1) % 3 === 0) {
        accumulator.push(draw_tree_row(number, width));
      }
      
      if (currentIndex + 1 === number) {
        accumulator.forEach((value) => console.log(value));
      }
      
      return accumulator;
    },
    []
  );
}
  
// xmasTree(6);
