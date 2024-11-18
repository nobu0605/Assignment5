import sys

def is_numeric(value):
    try:
        float(value)
        return True
    except ValueError:
        return False

def process_data(values):
    # Check if all inputs are numeric
    if not all(is_numeric(v) for v in values):
        return "Error: All inputs must be numeric."

    # Convert inputs to numbers
    numbers = list(map(float, values))

    # Check for negative values
    if any(n < 0 for n in numbers):
        return "Error: Negative values are not allowed."

    # Calculate the average
    avg = sum(numbers) / len(numbers)

    # Check if average is greater than 50
    avg_message = f"The average is {avg}. {'Greater than 50' if avg > 50 else 'Not greater than 50'}."

    # Determine if the count of positive numbers is even or odd
    positive_count = sum(1 for n in numbers if n > 0)
    parity_message = "The count of positive numbers is " + ("even." if positive_count % 2 == 0 else "odd.")

    # Create a new list with values greater than 10, sort it
    greater_than_10 = sorted([n for n in numbers if n > 10])

    # Format the results in HTML
    html = f"""
        <h2>Results:</h2>
        <p>Original Values: {', '.join(map(str, numbers))}</p>
        <p>Sorted Values (greater than 10): {', '.join(map(str, greater_than_10))}</p>
        <p>{avg_message}</p>
        <p>{parity_message}</p>
    """
    return html

if __name__ == "__main__":
    # Receive values from command line arguments
    input_values = sys.argv[1:]
    result = process_data(input_values)
    print(result)
