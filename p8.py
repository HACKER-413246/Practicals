import socket

def dns_query(domain):
    try:
        ip_address = socket.gethostbyname(domain)
        print(f"The IP address of {domain} is : {ip_address}")
    except socket.gaierror:
        print(f"Unable to resolve the domain {domain}.")

if __name__ == "__main__":
    domain = input("Enter the domain name: ")
    dns_query(domain)

