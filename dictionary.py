# Read the number of entries in the phone book
n = int(input().strip())

# Create an empty dictionary to store phone book entries
phone_book = {}

# Populate the phone book dictionary with entries
for _ in range(n):
    entry = input().split()
    name = entry[0]
    phone_number = entry[1]
    phone_book[name] = phone_number

# Process the queries
while True:
    try:
        query = input().strip()
        # Check if the query is in the phone book
        if query in phone_book:
            print(f"{query}={phone_book[query]}")
        else:
            print("Not found")
    except EOFError:
        break
