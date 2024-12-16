package main

func binarySearch(list []int, item int) int {
	low := 0
	high := len(list) - 1
	for low <= high {
		mid := (low + high) / 2
		guess := list[mid]
		if guess == item {
			return mid
		}
		if guess > item {
			high = mid - 1
		} else {
			low = mid + 1
		}
	}

	return -1
}

func main() {
	list := []int{1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15}
	println(binarySearch(list, 11))  // 10
	println(binarySearch(list, 111)) // -1
}
