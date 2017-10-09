/*
https://www.hackerrank.com/challenges/sequence-full-of-colors/problem
*/

import scala.io.StdIn

object Solution {


  def main(args: Array[String]): Unit = {

    val nr = StdIn.readLine().trim.toInt

    for (i <- 1 to nr) {
      println(isFullColour(StdIn.readLine().trim.toList))
    }

  }

  def isFullColour(string: List[Char]): String = {

    def notPass1(string: List[Char]): Boolean = {
      string.filter(_ == 'R').length != string.filter(_ == 'G').length
    }

    def notPass2(string: List[Char]): Boolean = {
      string.filter(_ == 'Y').length != string.filter(_ == 'B').length
    }

    def passPrefixAll(string: List[Char], d1: Int, d2: Int): Boolean = {
      if (string.isEmpty) return true
      if (d1 < -1 || d1 > 1 || d2 < -1 || d2 > 1) return false
      if (string(0) == 'R') return passPrefixAll(string.tail, d1 + 1, d2)
      if (string(0) == 'G') return passPrefixAll(string.tail, d1 - 1, d2)
      if (string(0) == 'Y') return passPrefixAll(string.tail, d1, d2 + 1)
      if (string(0) == 'B') return passPrefixAll(string.tail, d1, d2 - 1)
      return true
    }


    if (notPass1(string)) return "False"
    if (notPass2(string)) return "False"
    if (!passPrefixAll(string, 0, 0)) return "False"
    return "True"
  }

}