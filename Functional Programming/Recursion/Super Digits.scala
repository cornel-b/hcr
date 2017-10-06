/*
https://www.hackerrank.com/challenges/super-digit/problem
*/

import scala.io.StdIn

object Solution {

  def main(args: Array[String]): Unit = {
    val line: Array[String] = StdIn.readLine.trim.split(" ")
    val n = line(0)
    val m:Int = if (line.length == 2) line(1).toInt else 1
    val nn = n.toString //* m.toInt
    val result = getResult(nn.toList.map(_.toString.toInt)) * m.toInt
    val result2 = sumDigits(result, 10)

    println(result2)
  }

  def sumDigits(x:BigInt, base:Int=10):BigInt=sumDigits(x.toString(base), base)
  def sumDigits(x:String, base:Int):BigInt = x map(_.asDigit) sum


  def getResult(n: List[Int]): Int = {
    if (n.length == 1) return n(0)
    return getResult(n.sum.toString.toList.map(_.toString.toInt))
  }

}
