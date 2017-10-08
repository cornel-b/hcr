/*
https://www.hackerrank.com/challenges/string-compression/problem
*/

import scala.io.StdIn

object Solution {

  def main(args: Array[String]): Unit = {

    val string: List[Char] = StdIn.readLine().trim().toList
    val result = countOccurencies(string)

    print(result.mkString(""))

  }

  def countOccurencies(string: List[Char]): List[Char] = {

    def countOccRec(string: List[Char], current: Int, lastChar: Char): List[Char] = {
      if (string.isEmpty) return getNumber(current)

      if (string.head == lastChar) return countOccRec(string.tail, current + 1, string.head)
      else return getNumber(current) ++ (string.head :: countOccRec(string.tail, 1, string.head))
    }

    def getNumber(number: Int): List[Char] = {
      if (number < 2) return List()
      return number.toString.toList
    }

    return countOccRec(string, 0, ' ')

  }
}