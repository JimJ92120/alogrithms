def compare_recursively(a: list, b: list, iteration: int = 0):
    if (a.__len__() == iteration):
        print('{} {}'.format(sum(a), sum(b)))

        return

    a_iteration = a[iteration]
    a[iteration] = int(a[iteration] > b[iteration])
    b[iteration] = int(b[iteration] > a_iteration)
    
    del a_iteration

    return compare_recursively(a, b, iteration + 1)

def compare_triplets(a: list, b: list) -> list:
    if a.__len__() != b.__len__():
        print('wrong input')

        return

    compare_recursively(a, b)

# [scoreA, scoreB]
# compare_triplets(
#     [1, 2, 3, 4],
#     [3, 2, 1, 1] 
# )

# compare_triplets(
#     [5, 6, 7],
#     [3, 6, 10]
# )

# compare_triplets(
#     [17, 28, 30],
#     [99, 16, 8]  
# )
