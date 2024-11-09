import dns.resolver
import dns.query
import dns.message

def resolve_hostname(dns_server, hostname):
    try:
        # Create a DNS query for the A record (IPv4 address)
        query = dns.message.make_query(hostname, dns.rdatatype.A)

        # Send the query to the specified DNS server
        response = dns.query.udp(query, dns_server)

        # Check if we have an answer section in the response
        if response.answer:
            # Print the resolved IP addresses
            for answer in response.answer:
                for item in answer.items:
                    print(f"Resolved IP: {item.address}")
        else:
            print(f"No answer from DNS server for {hostname}")
    
    except Exception as e:
        print(f"An error occurred: {e}")

if __name__ == "__main__":
    # Example: Resolve 'example.com' using a custom DNS server (e.g., Google's 8.8.8.8)
    dns_server = "8.8.8.8"  # You can change this to any DNS server you want
    hostname = "google.com"  # Replace with the hostname you want to resolve

    resolve_hostname(dns_server, hostname)
