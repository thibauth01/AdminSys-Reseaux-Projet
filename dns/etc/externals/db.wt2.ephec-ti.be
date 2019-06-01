$TTL	86400
@	IN	SOA	ns.wt2.ephec-ti.be. contact.wt2.ephec-ti.be. (
		     2019053003		; Serial
			  43200		; Refresh
			   7200		; Retry
			1512000		; Expire
			  86400 )	; Negative Cache TTL
;
@	IN	NS	ns.wt2.ephec-ti.be.
@	IN	MX	10 mail
ns	IN	A	51.77.141.246
mail	IN	A	51.77.141.246
smtp	IN	CNAME	mail
pop3	IN	CNAME	mail
imap	IN	CNAME	mail

www	IN	A	51.77.144.85
b2b	IN	CNAME	www

_sip._udp	SRV	0	0	5060	sip
_sip._tcp	SRV	0	0	5060	sip
sip	IN	A	51.77.141.246
