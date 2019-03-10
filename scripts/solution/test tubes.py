import time

def PrimeList(n):
    '''
    :param n: upper limit
    :return: list of ordered primes smaller than n
    '''
    primes = [2]
    for possiblePrime in range(3, n + 1, 2):
        isPrime = True
        for num in range(2, int(possiblePrime ** 0.5) + 1):
            if possiblePrime % num == 0:
                isPrime = False
                break
        if isPrime:
            primes.append(possiblePrime)

    return primes

def getPrimeFactor(n, primes):
    '''
    :param n: a number to decompose in sum of primes
    :param primes: ordered list of primes below n
    :return: a list of sets of sum factor of n (eq for 6 : [{2}, {3)] as 6 = 2+2+2 or 3+3
    '''
    q = [[]]
    correct = []
    while len(q) > 0:
        c = q.pop(0)
        for v in primes:
            if sum(c) + v < n:
                q.append( c + [v] )
            elif sum(c) + v == n:
                correct.append(set(c + [v]))
            else:
                break
    return correct

"""
https://mattbaker.blog/2018/06/25/the-balanced-centrifuge-problem/
Conjecture: You can balance k identical test tubes, 1 ≤ k ≤ n, in an n-hole centrifuge 
if and only if both k and n-k can be expressed as a sum of prime divisors of n.
"""

Ns = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 20, 21]
Ns = [30]

for n in Ns:
    s=time.time()
    result = set()
    p = PrimeList(n)
    for k in range(2, n+1):
        if (n % 2 == 0 and k % 2 == 0) or (k == n):
            result.add(k)
        else:
            factor_pos = getPrimeFactor(k, p)
            factor_n_minus_pos = getPrimeFactor(n-k, p)
            for s1 in factor_pos:
                for s2 in factor_n_minus_pos:
                    if s1 == s2:
                        result.add(k)
    print(n, time.time() - s)
    print(*result)
