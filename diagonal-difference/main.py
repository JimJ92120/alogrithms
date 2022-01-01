def recursive(matrix: list, results: dict) -> int or str:
    if matrix.__len__() == 1 and matrix[0].__len__() > 0:
        return matrix[0][0]

    if matrix.__len__() == results[0].__len__() and results[0].__len__() > 0:
        return abs(sum(list(results[0].values())) - sum(list(results[1].values())))

    current_iteration = results[0].__len__()

    if matrix.__len__() == 0 or matrix.__len__() != matrix[current_iteration].__len__():
        return 'Un-expected input.'

    results[0][current_iteration] = matrix[current_iteration][current_iteration]
    results[1][current_iteration] = matrix[current_iteration][matrix.__len__() - (current_iteration + 1)]
    del current_iteration

    return recursive(matrix, results)

def diagonal_difference(matrix: list):  
    print(recursive(matrix, {0: {}, 1: {}}))

# 2
diagonal_difference([
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9]
])

# 1
diagonal_difference([
    [1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 8]
])
