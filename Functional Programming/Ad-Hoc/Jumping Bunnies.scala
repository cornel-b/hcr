/*
https://www.hackerrank.com/challenges/jumping-bunnies/problem
*/

import scala.io.StdIn

object Solution {

  def main(args: Array[String]): Unit = {

    val n = StdIn.readInt()
    val arr = StdIn.readLine().split(" ").map(_.toLong)
    val res = lcmArray(arr.head, arr.tail)
    print(res);
  }

  def lcmArray(x: Long, list: Array[Long]): Long = {
    if (list.length == 1) lcm(x, list(0))
    else lcm(x, lcmArray(list.head, list.tail))
  }

  def gcd(a: Long, b: Long): Long = if (b == 0) a.abs else gcd(b, a%b)

  def lcm(x: Long, y: Long): Long = {
    (x * y).abs / gcd(x, y)
  }

}