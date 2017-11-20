
#https://www.hackerrank.com/challenges/lonely-integer/problem

def  lonelyinteger(a) 
   a.reduce(&:^)
end

a = gets.strip.to_i
b = gets.strip.split(" ").map! {|i| i.to_i}
print lonelyinteger(b)