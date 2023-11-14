class Person:
	def __init__(self, firstName, lastName, idNumber):
		self.firstName = firstName
		self.lastName = lastName
		self.idNumber = idNumber
	def printPerson(self):
		print("Name:", self.lastName + ",", self.firstName)
		print("ID:", self.idNumber)

class Student(Person):
    
    
    # Write your constructor here
    def __init__(self, firstName, lastName, idNumber, scores):
        super().__init__(firstName, lastName, idNumber)
        self.scores = scores

    #   Function Name: calculate
    #   Return: A character denoting the grade.
    #
    # Write your function here
    def calculate(self):
        average = round(sum(self.scores) / len(self.scores))

        if average in range(90, 101):
            return "O"
        elif average in range(80, 90):
            return "E"
        elif average in range(70, 80):
            return "A"
        elif average in range(55, 70):
            return "P"
        elif average in range(40, 55):
            return "D"
        elif average in range(0, 41):
            return "T"
        else:
            return 'Invalid grade'
line = input().split()
firstName = line[0]
lastName = line[1]
idNum = line[2]
numScores = int(input()) # not needed for Python
scores = list( map(int, input().split()) )
s = Student(firstName, lastName, idNum, scores)
s.printPerson()
print("Grade:", s.calculate())