/*
https://www.hackerrank.com/challenges/string-mingling/problem
*/

import scala.io.StdIn

object Solution {

  def main(args: Array[String]): Unit = {
    val string1: List[Char] = StdIn.readLine().toList
    val string2: List[Char] = StdIn.readLine().toList
    val result = mingle(string1, string2)
    print(result.mkString(""))
  }

  def mingle(string1: List[Char], string2: List[Char]): List[Char] = {
    if (string1.isEmpty) List()
    else string1.head :: string2.head :: mingle(string1.tail, string2.tail)
  }

}
