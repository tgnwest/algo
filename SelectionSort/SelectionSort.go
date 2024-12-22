package main

import "fmt"

func main() {
	arr := []int{1, 5, 3, 6, 2, 10}
	fmt.Println(selectionSort(arr))
}

func findSmallest(arr []int) int {
	smallest := arr[0]
	smallestIndex := 0
	for index, item := range arr {
		if item < smallest {
			smallest = item
			smallestIndex = index
		}
	}

	return smallestIndex
}

func selectionSort(arr []int) []int {
	result := []int{}
	for _, item := range arr {
		fmt.Println(item)
		smallest := findSmallest(arr)
		result = append(result, arr[smallest])
		arr = removeIndex(arr, smallest)
	}

	return result
}

func removeIndex(s []int, index int) []int {
	return append(s[:index], s[index+1:]...)
}
